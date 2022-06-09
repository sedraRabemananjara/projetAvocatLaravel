<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserLoginController;
use App\Http\Controllers\user\UserSelectController;
use Laravel\Passport\Http\Controllers\AccessTokenController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/login', [AccessTokenController::class, 'issueToken'])->middleware(['api-login', 'throttle']);

Route::get('/users', [UserSelectController::class, 'selectAll']);

// Route::post('/login', [UserLoginController::class, 'login']);
