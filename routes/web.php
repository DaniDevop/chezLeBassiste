<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustumerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Storage;

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
Route::get('/listesProduct', [ProduitController::class, 'index']);

Route::post('/addProduct', [ProduitController::class, 'addProduct']);
Route::post('/updateProducts/{id}', [ProduitController::class, 'updateProduct']);
Route::get('/getProductById/{id}', [ProduitController::class, 'getProductById']);

Route::get('/productPath/{filename}', [ProduitController::class, 'getFile']);


Route::get('/AllCategory', [CategoryController::class, 'index']);
Route::post('/addCategory', [CategoryController::class, 'addCategory']);
Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory']);
Route::get('/CategoryById/{id}', [CategoryController::class, 'getCategoryById']);

// Custumer

Route::get('/custumer', [CustumerController::class, 'index']);
Route::post('/addCustumer', [CustumerController::class, 'addCustumer']);


// Order
Route::get('/order', [OrderController::class, 'index']);


Route::get('/imageFile/{filename}', function ($filename) {
    $path = storage_path('app/product_image/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);


    return response($file, 200)
        ->header('Content-Type', $type)
        ->header('Referrer-Policy', 'no-referrer-when-downgrade');
});
