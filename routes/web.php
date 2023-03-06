<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('backend.index');
// });

Route::get('/login', function(){
    return view('custom_auth.login');
});
Route::get('/register', function(){
    return view('custom_auth.registration');
});

Route::prefix('dashboard')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/','index')->name('dashboard.index');
    });

    Route::controller(CategoryController::class)->group(function(){
        // Route::resource('category',CategoryController::class);
        Route::get('/category','index')->name('category.index');
        Route::get('/category/create','create')->name('category.create');
        Route::post('category','store')->name('category.store');
        Route::get('/category/edit/{category}','edit')->name('category.edit');
        Route::post('/category/{category}','update')->name('category.update');
    });
    // Product
    Route::controller(ProductController::class)->group(function(){
        Route::get('/product','index')->name('product.index');
        Route::get('/product/create','create')->name('product.create');
    });
});
