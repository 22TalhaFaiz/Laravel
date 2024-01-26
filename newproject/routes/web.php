<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('index');
});
Route::get('/create', [CategoryController::class, 'create_form'])->name('create');
Route::post('/insert', [CategoryController::class, 'insert_data'])->name('insert');
Route::get('/show', [CategoryController::class, 'show_cat'])->name('showcat');
Route::resource('/editcat',CategoryController::class);
Route::delete('/{id}/delete',[CategoryController::class, 'delete'])->name('delete');

// Products

Route::get('/insertproduct', [ProductController::class, 'insertproduct'])->name('insertproduct');