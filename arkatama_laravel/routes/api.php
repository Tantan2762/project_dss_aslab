<?php

use App\Http\Controllers\ApiDprodukController;
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


Route::get('/dproduk', [ApiDprodukController::class, 'index']);
Route::post('/dproduk/store', [ApiDprodukController::class, 'store']);
Route::put('/dproduk/update', [ApiDprodukController::class, 'update']);
Route::delete('/dproduk/delete/{id}', [ApiDprodukController::class, 'delete']);
