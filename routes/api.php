<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get('/test', function () {
    return response()->json([
        'status' => true,
        'message' => 'Laravel 12 API working'
    ]);
});

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/addProduct',[ProductController::class,'addProduct']);
Route::get('/list',[ProductController::class,'list']);
Route::delete('/delete/{id}',[ProductController::class,'delete']);