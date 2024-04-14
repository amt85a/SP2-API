<?php
use App\Http\Controllers\api\v1;
use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\SockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('v1')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::apiResource('sock', SockController::class);


    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('booking', \App\Http\Controllers\api\v1\BookingController::class);
    });
});


