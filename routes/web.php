<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
/*

*/
Route::get('/', [ HomeController::class, 'index' ])->name('Home');
Route::get('/contact/', [ HomeController::class, 'contact' ])->name('Contact');
Route::get('/{cat}/{product_id}', [ ProductController::class, 'show' ])->name('showProduct');
Route::get('/{cat}', [ ProductController::class, 'showCategory' ])->name('showCategory');



