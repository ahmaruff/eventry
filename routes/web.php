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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/tentang-kami', function(){
    return view('home.tentang-kami');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class,'index']);
    Route::get('/categories',[\App\Http\Controllers\AdminController::class,'categoryDashboard']);
    Route::get('/categories/create',[\App\Http\Controllers\CategoryController::class,'createCategoryGet']);
    Route::post('/categories/create',[\App\Http\Controllers\CategoryController::class,'createCategoryPost']);
    Route::get('/events',[\App\Http\Controllers\AdminController::class,'eventDashboard']);
    Route::get('/users',[\App\Http\Controllers\AdminController::class,'userDashboard']);
    Route::get('/bookings',[\App\Http\Controllers\AdminController::class,'bookingDashboard']);
});
