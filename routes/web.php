<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\eCommerceController;
use App\Http\Controllers\OrderController;

Route::get('/', [eCommerceController::class, 'index'])->name('home');
Route::get('/search/category/{brand}', [eCommerceController::class, 'searchBrand'])->name('search-brand');
Route::get('/search/tag/{tag}', [eCommerceController::class, 'searchTag'])->name('search-tag');
Route::get('/search/product/', [eCommerceController::class, 'searchProduct'])->name('search.product');
Route::get('/show/{product}/', [eCommerceController::class, 'showProduct'])->name('show.product');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function(){
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{product}/{size}', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{product}/{size}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
});

Route::middleware(['auth', 'admin'])->group(function () {

    //tudo aqui dentro proibido (somente admin)

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product/trash/restore/{product}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product/trash/restore/{product}', [ProductController::class, 'restore'])->name('product.restore');

    Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/create', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{brand}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brand/edit/{brand}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/trash', [BrandController::class, 'trash'])->name('brand.trash');
    Route::get('/brand/trash/restore/{product}', [BrandController::class, 'restore'])->name('brand.restore');
    Route::get('/brand/destroy/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');

    Route::get('/tag', [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/create', [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/edit/{tag}', [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag/destroy/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
    Route::get('/tag/restore/{tag}', [TagController::class, 'restore'])->name('tag.restore');
    Route::get('/tag/trash', [TagController::class, 'trash'])->name('tag.trash');
});
