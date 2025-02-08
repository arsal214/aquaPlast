<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\TermConditionRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TermConditionController extends BaseController
{
    public function __construct(
        private TermConditionRepository $termConditionRepository,
    ) {
//        $this->middleware('permission:termConditions-list', ['only' => ['index', 'show']]);
//        $this->middleware('permission:termConditions-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:termConditions-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:termConditions-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $term = $this->termConditionRepository->list();
        return view('pages.term.index',compact('term'));
    }

    /**
     * Staff List
     */
    public function list(): JsonResponse
    {
        $data = $this->termConditionRepository->list();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return view('pages.term.actions.actions', compact('row'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.term.create');
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

            $data = $request->all();
            $this->termConditionRepository->storeOrUpdate($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.term-conditions.index'), 'Page Store successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $term = $this->termConditionRepository->findById($id);
        return view('pages.term.edit', compact('term'));
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

            $data = $request->all();

            $this->termConditionRepository->storeOrUpdate($data, $id);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
        return $this->redirectSuccess(route('pages.term-conditions.index'), 'Page Updated successfully.');
    }




}
