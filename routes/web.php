<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::fallback(function () {
//
//    return view("404");
//
//});

Route::get('/', function () {
    return view('Frontend.home.index');
});
Route::get('/restaurant-listings', function () {
    return view('frontend.templates.restaurants');
});







//Route::resource('/',App\Http\Controllers\HomeController::class);

Route::get('/adminpanel', function () {
    return redirect('admin/dashboard');
});

Route::get('/restaurant-panel', function () {
    return redirect('restaurant/dashboard');
});
Route::middleware(['auth'])
    ->group(function () {
        Route::resource('admin/roles', \App\Http\Controllers\RoleController::class);
        Route::resource('admin/permissions', \App\Http\Controllers\PermissionsController::class);
        Route::resource('admin/users', \App\Http\Controllers\UserController::class);
        Route::resource('admin/dashboard',App\Http\Controllers\HomeController::class);
        //Categories Routes
        Route::resource('admin/category',\App\Http\Controllers\Management\CategoryController::class);
        Route::resource('admin/restaurant-category',\App\Http\Controllers\Management\RestaurantCategoryController::class);
        //blog
        Route::resource('admin/post',BlogController::class);
    });



Route::middleware(['auth'])
    ->group(function () {
        Route::resource('restaurant/dashboard',App\Http\Controllers\Restaurant\HomeController::class);
        Route::resource('restaurant/menu', \App\Http\Controllers\Restaurant\MenuController::class);
        Route::get('restaurant/profile', [\App\Http\Controllers\Restaurant\HomeController::class,'ProfileSetting']);
        Route::post('restaurant/update', [\App\Http\Controllers\Restaurant\HomeController::class,'ProfileSettingUpdate']);
    });


Auth::routes();

