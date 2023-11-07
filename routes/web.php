<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix'=> 'category'], function(){
    route::get('/',[CategoryController::class, 'index'])->name('category');
    route::get('create',[CategoryController::class, 'create'])->name('category.create');
    route::post('store',[CategoryController::class,'store'])->name('category.store');
    route::get('edit/{category}',[CategoryController::class, 'edit'])->name('category.edit');
    route::patch('update/{category}',[CategoryController::class, 'update'])->name('category.update');
    Route::delete('delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
Route::group(['prefix'=> 'brands'], function(){
    route::get('/',[BrandController::class, 'index'])->name('brands');
    route::get('create',[BrandController::class, 'create'])->name('brands.create');
    route::post('store',[BrandController::class,'store'])->name('brands.store');
    route::get('edit/{brand}',[BrandController::class, 'edit'])->name('brand.edit');
    route::patch('update/{brand}',[BrandController::class,'update'])->name('brand.update');
    route::delete('delete/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
});

Route::group(['prefix'=> 'uom'], function(){
    route::get('/',[UomController::class, 'index'])->name('uom');
    route::get('create',[UomController::class, 'create'])->name('uom.create');
    route::post('store',[UomController::class,'store'])->name('uom.store');
    route::get('edit/{uom}',[UomController::class, 'edit'])->name('uom.edit');
    route::patch('update/{uom}',[UomController::class,'update'])->name('uom.update');
    route::delete('delete/{uom}', [UomController::class, 'destroy'])->name('uom.destroy');
});
Route::group(['prefix'=> 'product'], function(){
    route::get('/',[ProductController::class, 'index'])->name('product');
    route::get('create',[ProductController::class, 'create'])->name('product.create');
    route::post('store',[ProductController::class,'store'])->name('product.store');
    route::get('edit/{product}',[ProductController::class, 'edit'])->name('product.edit');
    route::patch('update/{product}',[ProductController::class,'update'])->name('product.update');
    route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
