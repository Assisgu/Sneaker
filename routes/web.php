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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class,'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/edit/{product}', [ProductController::class,'update'])->name('product.update');
    Route::get('/product', [ProductController::class,'index'])->name('product.index');
    Route::get('/product/trash', [ProductController::class,'trash'])->name('product.trash');
    Route::get('/product/trash/restore/{product}', [ProductController::class,'restore'])->name('product.restore');
    Route::get('/product/destroy/{product}', [ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/product/trash', [ProductController::class,'trash'])->name('product.trash');
    Route::get('/product/trash/restore/{product}', [ProductController::class,'restore'])->name('product.restore');  

});