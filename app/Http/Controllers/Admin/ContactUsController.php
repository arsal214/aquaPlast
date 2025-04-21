<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Interfaces\ContactUsRepositoryInterface;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends BaseController
{
    use UploadTrait;

    public function __construct(
        private ContactUsRepositoryInterface $contactRepository,
    ) {
        // $this->middleware('permission:contactUs-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:contactUs-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:contactUs-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:contactUs-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $contact = $this->contactRepository->list();
        return view('pages.contact-us.index',compact('contact'));
    }

    /**
     * Staff List
     */
    public function list(): JsonResponse
    {
        $data = $this->contactRepository->list();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('background_image', function ($row) {
                $image =   "<img src='{$row->background_image}'  height='50'>";
                return $image;
            })
            ->addColumn('action', function ($row) {
                return view('pages.contact-us.actions.actions', compact('row'));
            })
            ->rawColumns(['action', 'background_image'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.contact-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // $request->validate([
            //     // 'title' => 'required',
            // ]);

            $data = $request->except(['background_image']);
            $data['background_image'] = $request->hasFile('background_image') ? $this->uploadFile($request->file('background_image'), 'contactUs') : null;

            $this->contactRepository->storeOrUpdate($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.contact-us.index'), 'contact Us created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = $this->contactRepository->findById($id);
        return view('pages.contact-us.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // $request->validate([
            //     'title' => 'required',
            // ]);

            $data = $request->except(['background_image']);

            if ($request->hasFile('background_image')) {
                $data['background_image'] =  $this->uploadFile($request->file('background_image'), 'contactUs');
            }

            $this->contactRepository->storeOrUpdate($data, $id);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.contact-us.index'), 'About Us Updated successfully.');
    }



}
