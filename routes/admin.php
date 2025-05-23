<?php

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ProductSliderController;
use Illuminate\Support\Facades\Route;


/**
 * Profile Routes.
 */
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    // Route::delete('/profile', 'destroy')->name('profile.destroy');
});

/**
 * Permissions Routes.
 */
Route::prefix('permissions')->as('permissions.')->group(function () {
    /* ------------------------- Staff Permission Routes ------------------------ */
    Route::resource('staff', PermissionController::class)->except(['show', 'delete']);
});

/**
 * Roles Routes.
 */
Route::prefix('roles')->as('roles.')->group(function () {
    /* ------------------------- Staff Roles Routes ------------------------ */
    Route::get('/staff/list', [RoleController::class, 'list'])->name('staff.list');
    Route::resource('staff', RoleController::class);
});

/**
 * Catalog Routes.
 */
Route::prefix('catalog')->as('catalog.')->group(function () {
    /* -------------------------  Category Routes ------------------------ */
    Route::patch('category/change/{id}', 'ServiceCategoryController@change')->name('category.change');
    Route::get('category/list', 'ServiceCategoryController@list')->name('category.list');
    Route::get('get-subcategories/{categoryId}', [ProductCategoryController::class, 'getSubcategories']);
    Route::resource('category', ProductCategoryController::class);

});

/**
 * Users Routes.
 */
Route::prefix('users')->as('users.')->group(function () {

    /* ------------------------- Admin  Routes ------------------------ */

    Route::patch('staff/change/{id}', 'StaffController@change')->name('staff.change');
    Route::get('staff/list', 'StaffController@list')->name('staff.list');
    Route::resource('staff', StaffController::class);


});

/**
 * Settings Routes.
 */
Route::prefix('settings')->as('settings.')->group(function () {
    Route::controller(SettingController::class)->group(function () {
        Route::post('store', 'store')->name('store');
        Route::get('admin', 'admin')->name('admin');
    });
});

/**
 * Services Routes.
 */

Route::patch('products/change/{id}', 'ProductController@change')->name('products.change');
Route::get('products/list', 'ProductController@list')->name('products.list');
Route::resource('products', ProductController::class);


/**
 * Pages Routes.
 */
Route::prefix('pages')->as('pages.')->group(function () {
    /* -------------------------  Blogs Routes ------------------------ */
    Route::patch('blogs/change/{id}', 'BlogController@change')->name('blogs.change');
    Route::get('blogs/list', 'BlogController@list')->name('blogs.list');
    Route::resource('blogs', BlogController::class);

    /* -------------------------  About Routes ------------------------ */
    Route::get('about-us/list', 'AboutController@list')->name('about-us.list');
    Route::resource('about-us', AboutController::class);


    /* -------------------------  HomePage Routes ------------------------ */
    Route::get('homepage/list', 'HomePageController@list')->name('homepage.list');
    Route::resource('homepage', HomePageController::class);


    /* -------------------------  About Routes ------------------------ */
    Route::patch('teams/change/{id}', 'TeamController@change')->name('teams.change');
    Route::get('teams/list', 'TeamController@list')->name('teams.list');
    Route::resource('teams', TeamController::class);


    /* -------------------------  FAQ Routes ------------------------ */
    Route::get('privacy-policy/list', 'PrivacyPolicyController@list')->name('privacy-policy.list');
    Route::resource('privacy-policy', PrivacyPolicyController::class);


    /* -------------------------  FAQ Routes ------------------------ */
    Route::get('term-conditions/list', 'TermConditionController@list')->name('term-conditions.list');
    Route::resource('term-conditions', TermConditionController::class);

    /* -------------------------  Contact Routes ------------------------ */
    Route::get('contact-us/list', 'ContactUsController@list')->name('contact-us.list');
    Route::resource('contact-us', ContactUsController::class);

   /* -------------------------  Testimonials Routes ------------------------ */

   Route::patch('testimonials/change/{id}', 'TestimonialController@change')->name('testimonials.change');
   Route::get('testimonials/list', 'TestimonialController@list')->name('testimonials.list');
   Route::resource('testimonials', TestimonialController::class);



   Route::get('product-slider/list', 'ProductSliderController@list')->name('product-slider.list');
   Route::resource('product-slider', ProductSliderController::class);



});

