<?php

use App\Http\Controllers\Backend\CategoryController;
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
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category','index')->name('category.index');
        Route::get('/','dash')->name('dashboard.index');
    });
});
