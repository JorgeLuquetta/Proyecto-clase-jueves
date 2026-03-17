<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/admin', function () {
    $stats = [
        'users' => User::count(),
        'categories' => Category::count(),
        'products' => Product::count(),
        'cart_items' => CartItem::count(),
    ];

    $latestProducts = Product::latest()->take(5)->get();
    return view('admin.dashboard', compact('stats', 'latestProducts'));
});

Route::prefix('product')->controller(ProductController::class)->group(function (){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create');
    Route::post('/store', 'store')->name('product.store');
    Route::get('/{producto}', 'show')->name('product.show');
    Route::delete('/{producto}', 'destroy')->name('product.destroy');
});