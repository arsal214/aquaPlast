<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\ProductFaq;
use App\Models\ProductImage;
use App\Traits\UploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends BaseController
{

    use  UploadTrait;

    public function __construct(
        private ProductRepositoryInterface         $productRepository,
        private ProductCategoryRepositoryInterface $productCategoryRepository,
    )
    {
        $this->middleware('permission:products-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:products-create', ['only' => ['store']]);
        $this->middleware('permission:products-edit', ['only' => ['edit', 'update', 'change']]);
        $this->middleware('permission:products-delete', ['only' => ['destroy']]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.products.index');
    }


    /**
     * Display a listing of the resource.
     */
    public function list(): JsonResponse
    {
        $data = $this->productRepository->list();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return view('pages.products.actions', compact('row'));
            })->editColumn('status', function ($row) {
                return view('pages.products.status', compact('row'));
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $parentCategories = $this->productCategoryRepository->activeList();

        $subCategories = $this->productCategoryRepository->nestedCategories();

        return view('pages.products.create', compact('parentCategories','subCategories'));
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'category_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'faqs' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = $request->except(['images', 'faqs']);
            $service = $this->productRepository->storeOrUpdate($data);
            if($request->hasFile('image')){
                $serviceImage = new ProductImage();
                $serviceImage->product_id = $service->id;
                $url = $this->uploadFile($request->image, 'products/images');
                $serviceImage->image = $url;
                $serviceImage->save();
            }
            if ($request->has('faqs')) {
                foreach ($request->faqs as $faq) {
                    $serviceFaq = new ProductFaq();
                    $serviceFaq->product_id = $service->id;
                    $serviceFaq->question = $faq['question'];
                    $serviceFaq->answers = $faq['answer'];
                    $serviceFaq->save();
                }
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('products.index'), 'Products created successfully.');
    }

    public function show($id)
    {
        $service = $this->productRepository->findById($id);
        $service->load('images');
        return view('pages.services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = $this->productRepository->findById($id);
        
        $parentCategories = $this->productCategoryRepository->activeList();

        $subCategories = $this->productCategoryRepository->nestedCategories();
        $service->load('images','faqs','category','subCategory');

        return view('pages.products.edit', compact('service','parentCategories','subCategories'));
    }

    public function update(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'category_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'faqs' => 'required',
            ]);
            $data = $request->except(['images','faqs']);
            $service = $this->productRepository->storeOrUpdate($data,$id);
            if($request->hasFile('image')){
                $serviceFaq = ProductImage::where('product_id', $service->id)->delete();
                $serviceImage = new ProductImage();
                $serviceImage->product_id = $service->id;
                $url = $this->uploadFile($request->image, 'products/images');
                $serviceImage->image = $url;
                $serviceImage->save();
            }
            if ($request->has('faqs')) {
                $serviceFaq = ProductFaq::where('product_id', $service->id)->delete();
                foreach ($request->faqs as $faq) {
                    $serviceFaq = new ProductFaq();
                    $serviceFaq->product_id = $service->id;
                    $serviceFaq->question = $faq['question'];
                    $serviceFaq->answers = $faq['answer'];
                    $serviceFaq->save();
                }
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->redirectError($th->getMessage());
        }
        return redirect()->back()->with('success', 'Product Update successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $service = $this->productRepository->findById($id);
            if ($service) {
                $service->delete();
            }

        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return redirect()->back()->with('success', 'Supplier Services Delete successfully');
    }

}
