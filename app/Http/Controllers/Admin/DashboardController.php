<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class DashboardController extends BaseController
{

    public function __construct() {
        $this->middleware('permission:dashboard-view', ['only' => ['index']]);

    }

    /**
     * Get a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){

        $stats['products'] =  Product::count();


        return view('pages.dashboard.index',compact('stats'));
    }
}
