<?php

use App\Http\Controllers\ProductController;
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


Route::get('/', function () { return view('pages.home'); });
Route::get('/about', function () { return view('pages.about'); });
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/products', function () { return view('pages.products'); });

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product._edit-product');
Route::get('/products/{product}/show', [ProductController::class, 'show'])->name('product._show-product');