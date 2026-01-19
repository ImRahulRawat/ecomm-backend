<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/test', function () {
    return response()->json([
        'status' => true,
        'message' => 'Laravel 12 API working'
    ]);
});

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);