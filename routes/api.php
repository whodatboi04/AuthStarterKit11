<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
   
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('refresh', [AuthController::class, 'refresh'])->name('refresh');
        Route::get('getUser', [AuthController::class, 'getUser'])->name('getuser');
    });

});
