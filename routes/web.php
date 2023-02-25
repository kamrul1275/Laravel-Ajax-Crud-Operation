<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'Index'])->name('home.index');

Route::post('/add/product', [ProductController::class, 'AddProduct'])->name('add.product');

Route::get('/edit/product', [ProductController::class, 'EditProduct'])->name('product.edit');

Route::post('/update/product', [ProductController::class, 'UpdateProduct'])->name('product.update');

Route::get('/delete/product', [ProductController::class, 'DeleteProduct'])->name('product.delete');
