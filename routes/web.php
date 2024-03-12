<?php

use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ category',[CategoriesController::class,'index']);
Route::post('/categorysave',[ CategoriesController::class,'categories_save'])->name('categories_save');
Route::post('/categoryupdate/{id}',[ CategoriesController::class,'categories_update'])->name('categories_update');
Route::get('/deletecategory/{id}',[CategoriesController::class,'delete_category'])->name('delete_category');

// pro
Route::get('/product',[ProductController::class,'index']);
Route::post('/productsave',[ ProductController::class,'product_save'])->name('product_save');
Route::post('/productupdate',[ ProductController::class,'product_update'])->name('product_update');

