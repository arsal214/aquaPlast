<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\ProductSlider;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;

class ProductSliderController extends BaseController
{
     use UploadTrait;




    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $about = ProductSlider::latest()->get();
        return view('pages.product-slider.index',compact('about'));
    }

    /**
     * Staff List
     */
    public function list(): JsonResponse
    {
        $data = ProductSlider::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('image', function ($row) {
                $image =   "<img src='{$row->image}'  height='50'>";
                return $image;
            })
            ->addColumn('action', function ($row) {
                return view('pages.product-slider.actions.actions', compact('row'));
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.product-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
            ]);

            $data = $request->except(['image']);
            $data['image'] = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'productSliders') : null;

            $productSLider = ProductSlider::create($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.product-slider.index'), 'Product Slider created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = ProductSlider::find($id);
        return view('pages.product-slider.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'title' => 'required',
            ]);

           $data = $request->except(['image']);

            if ($request->hasFile('image')) {
                $data['image'] =  $this->uploadFile($request->file('image'), 'productSliders');
            }

            $plan = ProductSlider::updateOrCreate(
            ['id' => $id],
            $data
        );
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.product-slider.index'), 'Product SLider Updated successfully.');
    }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
       try {
           $about = ProductSlider::find($id);
           $about->delete();
       } catch (\Throwable $th) {
           return $this->redirectError($th->getMessage());
       }
       return  $this->redirectSuccess(route('pages.product-slider.index'), 'Data deleted successfully');
   }


}
