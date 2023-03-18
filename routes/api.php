<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [ProductController::class,'index']);
Route::get('products/{product}', [ProductController::class,'show']);
Route::post('products', [ProductController::class,'store']);
Route::put('products/{product}', [ProductController::class,'update']);
Route::delete('products/{product}', [ProductController::class,'delete']);