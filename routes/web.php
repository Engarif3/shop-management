<?php


use App\Http\Controllers\productController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

// routes/web.php


Route::get('/', [productController::class, 'index']);
Route::get('/add-product', [ProductController::class, 'create']);
Route::post('/add-product', [ProductController::class, 'store']);
Route::get('/update-quantity', [ProductController::class, 'showUpdateQuantityPage'])->name('show-update-quantity');
Route::put('/update-quantity/{id}', [ProductController::class, 'updateQuantity'])->name('update-quantity');
Route::get('/change-price', [ProductController::class, 'showChangePriceForm'])->name('show-change-price');
Route::put('/change-price/{id}', [ProductController::class, 'updatePrice'])->name('change-price');
Route::get('/dashboard', [SalesController::class, 'dashboard']);
Route::get('/sales-history', [SalesController::class, 'salesHistory']);
