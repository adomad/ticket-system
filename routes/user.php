<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::post('/create_user', [AdminController::class, 'create_user'])->name('create_user');
Route::get('/add_user', [AdminController::class, 'add_user'])->name('add_user');
Route::get('/show_user', [AdminController::class, 'show_user'])->name('show_user');

Route::post('/user_status', [AdminController::class, 'user_status'])->name('user_status');
Route::delete('/user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');