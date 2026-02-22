<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/product', [ ProductController::class, 'index' ] );
Route::get('/product/create', [ ProductController::class, 'create' ] );
Route::get('/product/{producto}', [ ProductController::class, 'show' ] );