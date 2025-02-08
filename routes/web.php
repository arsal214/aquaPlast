<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontEnd\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/productList', [PagesController::class, 'products']);

Route::get('/productShow/{id}', [PagesController::class, 'productShow'])->name('productShow');




Route::get('/team', [PagesController::class, 'team']);

Route::get('/blog', [PagesController::class, 'blog']);

Route::get('/blogShow/{id}', [PagesController::class, 'blogShow'])->name('blogShow');


Route::get('/contact', [PagesController::class, 'contact']);



Route::redirect('login', 'login');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
