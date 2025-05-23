<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Interfaces\HomepageRepositoryInterface;
use App\Traits\UploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomePageController extends BaseController
{
    use UploadTrait;

    public function __construct(
        private HomepageRepositoryInterface $homepageRepository,
    ) {
        $this->middleware('permission:homepage-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:homepage-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:homepage-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:homepage-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $homepage = $this->homepageRepository->list();
        return view('pages.homepage.index',compact('homepage'));
    }

    /**
     * Staff List
     */
    public function list(): JsonResponse
    {
        $data = $this->homepageRepository->list();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('thumbnail', function ($row) {
                $image =   "<img src='{$row->thumbnail}'  height='50'>";
                return $image;
            })
            ->addColumn('action', function ($row) {
                return view('pages.homepage.actions.actions', compact('row'));
            })
            ->rawColumns(['action', 'thumbnail'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

            $data = $request->except(['thumbnail']);

            if ($request->hasFile('thumbnail')) {
                $data['thumbnail'] =  $this->uploadFile($request->file('thumbnail'), 'homepage');
            }

            $this->homepageRepository->storeOrUpdate($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.homepage.index'), 'Slider created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $homepage = $this->homepageRepository->findById($id);
        return view('pages.homepage.edit', compact('homepage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

            $data = $request->except(['thumbnail']);
              
            if ($request->hasFile('thumbnail')) {
                $data['thumbnail'] =  $this->uploadFile($request->file('thumbnail'), 'homepage');
            }
        
            $this->homepageRepository->storeOrUpdate($data, $id);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.homepage.index'), 'Homepage Updated successfully.');
    }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
       try {
           $about = $this->homepageRepository->findById($id);
           $about->delete();
       } catch (\Throwable $th) {
           return $this->redirectError($th->getMessage());
       }
       return  $this->redirectSuccess(route('pages.about-us.index'), 'About deleted successfully');
   }


}
