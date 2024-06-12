<?php

use App\Http\Controllers\DrugController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\stocksController;
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

Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::put('updateItem/{id}', [ItemController::class, 'update']);
Route::post('storeItems/', [ItemController::class, 'store']);
Route::get('showItems/', [ItemController::class, 'index']);
Route::get('showItems/{id}', [ItemController::class, 'show']);
Route::delete('deleteitem/{id}', [ItemController::class, 'deleteitem']);

// Route::put('updateHospital/{id}', [HospitalController::class, 'update']);
// Route::post('storeHospital/', [HospitalController::class, 'store']);
// Route::get('showHospital/', [HospitalController::class, 'index']);
// Route::get('showHospital/{id}', [HospitalController::class, 'show']);
// Route::delete('deleteHospital/{id}', [HospitalController::class, 'deleteitem']);

Route::apiResource('hospital', HospitalController::class)->names([
    '                                              '   => 'hospital.index',
    'store'   => 'hospital.store',
    'show'    => 'hospital.show',
    'update'  => 'hospital.update',
    'destroy' => 'hospital.destroy',
]);
Route::apiResource('orders', OrderController::class);
Route::apiResource('drug', DrugController::class);
Route::apiResource('stoks', stocksController::class)->names([
    'index' => 'stoks.index',
    'show' => 'stoks.show',
]);