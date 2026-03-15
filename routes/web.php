<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class, 'landing');

Route::prefix('product')->controller(ProductController::class)->group(function (){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create');
    Route::post('/store', 'store')->name('product.store');
    Route::get('/{producto}', 'show')->name('product.show');
    Route::delete('/{producto}', 'destroy')->name('product.destroy');
});