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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product', function () {
    return view('pages.products');
});

Route::get('/product/{id}', function () {
    return view('pages.product');
});

Route::get('/profile', function () {
    return view('pages.profile');
})->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';

Route::middleware('auth:admin')->group(function () {

    Route::get('admin', function () {
        return view('admin.dashboard');
    });
    
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';



