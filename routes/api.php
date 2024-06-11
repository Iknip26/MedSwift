<?php

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthenticationController;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [AuthenticationController::class, 'logout']);
});

Route::post('/login', [AuthenticationController::class, 'login']);

Route::put('updateItem/{id}', [ItemController::class, 'update']);
Route::post('storeItems/', [ItemController::class, 'store']);
Route::get('showItems/', [ItemController::class, 'index']);
Route::get('showItems/{id}', [ItemController::class, 'show']);
Route::delete('deleteitem/{id}', [ItemController::class, 'deleteitem']);

Route::apiResource('orders', OrderController::class);