<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\PagesController;

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


Route::post('/blog-comment/{id}', [PagesController::class, 'blogComment'])->name('blogComment');


Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/term-conditions', [PagesController::class, 'termConditions']);

Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy']);

Route::post('/support', [PagesController::class, 'support'])->name('support');



Route::redirect('login', 'login');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
