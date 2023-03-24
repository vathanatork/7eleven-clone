<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterController;
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
Route::get('/admin', function () {return redirect('/admin/product');})->middleware('admin');

//product routes
Route::resource('/admin/product',ProductController::class)->middleware('admin');
Route::GET('/admin/product/search/{id}',[ProductController::class,'sortByType'])->middleware('admin');
Route::GET('/admin/product/filter/{search}',[ProductController::class,'filterProduct'])->middleware('admin');
Route::GET('/admin/search',[ProductController::class,'search'])->middleware('admin');

//messages
Route::GET('/message/view',[MessageController::class,'index'])->middleware('admin');
Route::GET('/message/read/{id}',[MessageController::class,'read'])->middleware('admin');
//category routes
Route::resource('/admin/category',CategoryController::class)->middleware('admin');
Route::GET('/admin/category/filter/{searh}',[CategoryController::class,'selectByCategory'])->middleware('admin');

//client routes
Route::GET('/store',[ClientController::class,'index']);
Route::GET('/about',[ClientController::class,'about']);
Route::GET('/contact',[ClientController::class,'contact']);
Route::POST('/contact',[ClientController::class,'contactStore']);
Route::GET('/store/{search}',[ClientController::class,'sortByCategory']);
Route::GET('/store/detail/{id}',[ClientController::class,'show']);
Route::GET('/store/filter/{type}',[ClientController::class,'filter']);
Route::GET('/store/sort/{slug}',[ClientController::class,'sortBy']);
Route::POST('/store/search',[ClientController::class,'search']);
//user routes
//user routes
Route::GET('/admin/user',[UserController::class,'index']);

//register routes
Route::POST('/register',[RegisterController::class,'store'])->middleware('guest');
Route::POST('/logout',[RegisterController::class,'destroy'])->middleware('auth');
Route::POST('/login',[RegisterController::class,'login'])->middleware('guest');