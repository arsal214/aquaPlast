<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\PrivacyPolicyRepository;
use App\Traits\UploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PrivacyPolicyController extends BaseController
{
    use UploadTrait;
    public function __construct(
        private PrivacyPolicyRepository $privacyPolicyRepository,
    ) {
//        $this->middleware('permission:privacyPolicy-list', ['only' => ['index', 'show']]);
//        $this->middleware('permission:privacyPolicy-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:privacyPolicy-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:privacyPolicy-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $privacy = $this->privacyPolicyRepository->list();
        return view('pages.privacy.index',compact('privacy'));
    }

    /**
     * Staff List
     */
    public function list(): JsonResponse
    {
        $data = $this->privacyPolicyRepository->list();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return view('pages.privacy.actions.actions', compact('row'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.privacy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([            
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'description' => 'required',
            ]);

            $data = $request->except('image');
            $data['image'] = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'privacy') : 'https://png.pngtree.com/element_our/20200610/ourmid/pngtree-character-default-avatar-image_2237203.jpg';
            $this->privacyPolicyRepository->storeOrUpdate($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.privacy-policy.index'), 'Privacy Policy successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $privacy = $this->privacyPolicyRepository->findById($id);
        return view('pages.privacy.edit', compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'description' => 'required',
            ]);

        
            $data = $request->except('image');
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadFile($request->file('image'), 'privacy');
            }
            $this->privacyPolicyRepository->storeOrUpdate($data, $id);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.privacy-policy.index'), 'Page Updated successfully.');
    }




}
