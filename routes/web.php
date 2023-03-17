<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
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
Route::get('/', function () {return view('page.client.home');});
Route::get('/admin', function () {return redirect()->view('page.admin.layout.index');});

//product route
Route::resource('/admin/product',ProductController::class);
Route::GET('/admin/product/search/{id}',[ProductController::class,'sortBycategory']);
Route::GET('/admin/product/filter/{search}',[ProductController::class,'filterProduct']);
Route::GET('/admin/search',[ProductController::class,'search']);

//category route
Route::resource('/admin/category',CategoryController::class);
Route::GET('/admin/category/filter/{searh}',[CategoryController::class,'selectByCategory']);

//client route
Route::GET('/store',[ClientController::class,'index']);
Route::GET('/store/detail/{id}',[ClientController::class,'show']);