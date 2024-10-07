<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('product', ProdukController::class);
Route::delete('product/delete/{id}' , [ProdukController::class,'destroy']);
Route::put('update/produk/{id}' , [ProdukController::class,'update']);
