<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShoeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
});

// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/contact-us', function () {
    return view('contactUs');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::controller(ShoeController::class)->group(function() {
    Route::get('/add-product', 'createShoe')->middleware('admin');
    Route::post('/add-product1', 'createShoe1');
    Route::get('/product', 'viewShoes');
    Route::get('/edit-product/{id}', 'editProduct');
    Route::patch('/update-product/{id}', 'updateProduct');
    Route::delete('/delete-product/{id}', 'deleteProduct');
});

Route::get('/add-category', [CategoryController::class, 'add']);
Route::post('/add-category1', [CategoryController::class, 'add1']);

Route::get('/add-shipment', [ShipmentController::class, 'add']);
Route::post('/add-shipment1', [ShipmentController::class, 'add1']);

Route::get('/add-order/{id}', [OrderController::class, 'add']);
Route::post('/add-order1/{id}', [OrderController::class, 'add1']);

