<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiDanhMucController;
use App\Http\Controllers\Api\ApiLoginController;
use App\Http\Controllers\Api\ApiSanPhamController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [ApiLoginController::class, 'login']);
Route::post('/logout', [ApiLoginController::class, 'logout'])->middleware('auth:sanctum');
Route::apiResource('product', controller: ApiSanPhamController::class); 
Route::apiResource('listproduct', controller: ApiDanhMucController::class); 