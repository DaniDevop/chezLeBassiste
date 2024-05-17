<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustumerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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

// Routes accessibles sans authentification
Route::get('/', [ProduitController::class, 'index']);

Route::post('/addProduct', [ProduitController::class, 'addProduct']);
Route::post('/updateProduct/{id}', [ProduitController::class, 'updateProduct']);


// Category
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/addCategory', [CategoryController::class, 'addCategory']);
Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory']);

// Custumer

Route::get('/custumer', [CustumerController::class, 'index']);
Route::post('/addCustumer', [CustumerController::class, 'addCustumer']);


// Order
Route::get('/order', [OrderController::class, 'index']);
