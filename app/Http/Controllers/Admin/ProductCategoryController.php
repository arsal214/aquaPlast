<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Traits\UploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryController extends BaseController
{
    use UploadTrait;

    public function __construct(
        private ProductCategoryRepositoryInterface $productCategoryRepository,
    )
    {
        $this->middleware('permission:productCategory-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:productCategory-create', ['only' => ['store']]);
        $this->middleware('permission:productCategory-edit', ['only' => ['edit', 'update', 'change']]);
        $this->middleware('permission:productCategory-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->productCategoryRepository->parentCategory();
        return view('pages.catalog.products-category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $parentCategories = $this->productCategoryRepository->activeCategory();

        return view('pages.catalog.products-category.create', compact('parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
                'short_description' => 'required',
                'status' => 'required',
            ]);

            if ($request->parent_id === null) {

                $parentCategories = $this->productCategoryRepository->list();
                $parentNames = $parentCategories->pluck('name');
                if ($parentNames->contains($request->name)) {
                    return $this->redirectError('Category Name Already Taken');
                }
            }
            if ($request->parent_id !== null) {
                $childCategories = $this->productCategoryRepository->subCategory($request->parent_id);
                $childNames = $childCategories->pluck('name');
                if ($childNames->contains($request->name)) {
                    return $this->redirectError('Category Name Already Taken');
                }
            }

            $data = $request->except('image');
            $data['image'] = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'categories') : 'https://png.pngtree.com/element_our/20200610/ourmid/pngtree-character-default-avatar-image_2237203.jpg';
            $this->productCategoryRepository->storeOrUpdate($data);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('catalog.category.index'), 'Category created successfully.');
    }

//    /**
//     * Display the specified resource.
//     */
//    public function show($id)
//    {
////        $childCategory = $this->serviceCategoryRepository->nestedCategory($id);
//        $catId = $id;
//        return view('pages.catalog.products-category.child-category.index', compact('catId'));
//    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): RedirectResponse|View
    {
        $category = $this->productCategoryRepository->findById($id);
        $parentCategories = $this->productCategoryRepository->activeCategory();
        return view('pages.catalog.products-category.edit', compact('category', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'short_description' => 'required',
                'status' => 'required'
            ]);

            if ($request->parent_id === null) {
                // Fetch all parent categories except the current one being updated
                $parentCategories = $this->productCategoryRepository->list()->where('id', '!=', $id);
                $parentNames = $parentCategories->pluck('name');
                // Check if the name already exists in the parent categories
                if ($parentNames->contains($request->name)) {
                    return $this->redirectError('Category Name Already Taken');
                }
            }

            if ($request->parent_id !== null) {
                // Fetch all child categories of the parent except the current one being updated
                $childCategories = $this->productCategoryRepository->subCategory($request->parent_id)->where('id', '!=', $id);
                $childNames = $childCategories->pluck('name');
                // Check if the name already exists in the child categories
                if ($childNames->contains($request->name)) {
                    return $this->redirectError('Category Name Already Taken');
                }
            }
            $data = $request->except('image');
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadFile($request->file('image'), 'categories');
            }
            $this->productCategoryRepository->storeOrUpdate($data, $id);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('catalog.category.index'), 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        try {
            $this->productCategoryRepository->destroyById($id);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('catalog.category.index'), 'Category deleted successfully');
    }

    public function change(Request $request, string $id)
    {
        try {
            $data = [];
            if ($request->field == 'status') {
                $data['status'] = $request->boolean('status'); // Use boolean to handle checkbox
            }
            $this->productCategoryRepository->storeOrUpdate($data, $id);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('catalog.category.index'), 'Category changed successfully.');
    }


    public function getSubcategories($categoryId){

        $subcategory = $this->productCategoryRepository->nestedCategory($categoryId);

        if ($subcategory) {
            return response()->json([
                'subcategories' => $subcategory->children // Assuming 'subcategories' is a relationship
            ]);
        }

        return response()->json([
            'subcategories' => []
        ]);


    }
}
