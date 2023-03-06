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
    
    Route::get('admin/auction/create/{product}', [AuctionController::class, 'create'] )->name('auction.create');
    Route::post('admin/auction/{product}', [AuctionController::class, 'store'] )->name('auction.store');
    Route::get('admin/lelang/{lelang}/tawar', [AuctionController::class, 'tawar'] )->name('lelang.tawar');
    Route::delete('admin/lelang/{lelang}', [AuctionController::class, 'akhiri'] )->name('lelang.akhiri');



    
});    

require __DIR__.'/adminauth.php';



