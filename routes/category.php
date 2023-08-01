<?php

use App\Http\Controllers\AdminController;



use Illuminate\Support\Facades\Route;

Route::get('/add_subcategory', [AdminController::class, 'add_subcategory'])->name('add_subcategory');
Route::get('/add_category', [AdminController::class, 'category'])->name('add_category');
Route::get('/show_category', [AdminController::class, 'show_category'])->name('show_category');
Route::get('/update_category/{id}', [AdminController::class, 'updatecategory'])->name('update_category');
Route::get('/update_subcategory/{id}', [AdminController::class, 'updatesubcategory'])->name('update_subcategory');
Route::post('/create_category', [AdminController::class, 'create_category'])->name('create_category');
Route::post('/edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');
Route::post('/edit_subcategory/{id}', [AdminController::class, 'edit_subcategory'])->name('edit_subcategory');
Route::get('/add_subcategory', [AdminController::class, 'add_subcategory'])->name('add_subcategory');
Route::post('/getSubcategories', [AdminController::class, 'getSubcategories'])->name('getSubcategories');
Route::delete('/subcategory/{id}', [AdminController::class, 'delete_subcategory'])->name('delete_subcategory');
Route::delete('/category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::post('/create_subcategory', [AdminController::class, 'create_subcategory'])->name('create_subcategory');
Route::get('/show_subcategory', [AdminController::class, 'show_subcategory'])->name('show_subcategory');