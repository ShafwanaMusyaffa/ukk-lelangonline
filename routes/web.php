<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ProductController;

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


    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth:admin'])->name('admin.dashboard');
    
    
    Route::resource('/admin/products', ProductController::class)->middleware('auth:admin');
    Route::resource('/admin/auctions', AuctionController::class)->middleware('auth:admin')->only([
        'index', 'update', 'show'
    ]);;
    
    Route::get('admin/auctions/create/{product}', [AuctionController::class, 'create'] )->name('auction.create');
    Route::post('admin/auctions/{product}', [AuctionController::class, 'store'] )->name('auction.store');
    Route::get('admin/auctions/{auction}/tawar', [AuctionController::class, 'tawar'] )->name('auction.tawar');
    Route::delete('admin/auctions/{auction}', [AuctionController::class, 'akhiri'] )->name('auction.akhiri');
    
});    

require __DIR__.'/adminauth.php';



