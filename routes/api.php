<?php

use App\Http\Controllers\ShoeController;
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

Route::post('/add-shoe', [ShoeController::class, 'addShoeApi']);
Route::get('/data-shoe', [ShoeController::class, 'getShoeApi']);
Route::patch('/update-shoe/{id}', [ShoeController::class, 'updateShoeApi']);
Route::delete('/delete-shoe/{id}', [ShoeController::class, 'deleteShoeApi']);