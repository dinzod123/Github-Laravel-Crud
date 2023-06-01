<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class, 'index'])->name('pro.index');
Route::get('/create', [ProductController::class, 'create'])->name('pro.create');
Route::post('/store', [ProductController::class, 'store'])->name('pro.store');
Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('pro.edit');
Route::put('/{product}/update', [ProductController::class, 'update'])->name('pro.update');
Route::delete('/{product}/delete', [ProductController::class, 'delete'])->name('pro.delete');


