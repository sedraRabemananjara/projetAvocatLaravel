<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserSelectController;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', [AccessTokenController::class, 'issueToken'])
    ->middleware(['api-login', 'throttle']);


Route::middleware(['web', 'auth:api'])->group(function () {
    Route::get('/users', [UserSelectController::class, 'selectAll']);

    Route::get('/user', [UserSelectController::class, 'select']);

    Route::get('/valider-token', function () {
        return ['data' => true];
    });
});

// Route::post('/login', [UserLoginController::class, 'login']);
