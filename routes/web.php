<?php

use Illuminate\Support\Facades\Route;
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
// 2.	View (Home, Product List, Product Details, Product Edit, Product Add)
Route::get('/', [ProductController::class,'home'])->name('home');
//  Add
Route::get('/Products/ProductAdd',[ProductController::class,'Add'])->name('Products.ProductAdd');
Route::post('/Products/ProductAdd',[ProductController::class,'AddSubmit'])->name('Products.ProductAdd');
// Edit
Route::get('/Products/ProductEdit/{id}',[ProductController::class,'edit']);
Route::post('/Products/ProductEdit',[ProductController::class,'editSubmit'])->name('Products.ProductEdit');
//List
Route::get('/Products/ProductList',[ProductController::class,'list'])->name('Product.list'); 

Route::get('/Products/ProductDetails/{id}',[ProductController::class,'details']);
// Details
Route::get('/Products/ProductDetails',[ProductController::class,'list'])->name('Products.ProductDetails');
//Delete
Route::get('/Products/ProductDelete/{id}',[ProductController::class,'delete']);
