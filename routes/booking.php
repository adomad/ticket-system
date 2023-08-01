<?php

use Illuminate\Support\Facades\Route;

Route::get('/add_bookings', [AdminController::class, 'add_bookings'])->name('add_bookings');
Route::get('/show_booking', [AdminController::class, 'show_booking'])->name('show_booking');
Route::get('/booking_api', [AdminController::class, 'booking_api'])->name('booking_api');

Route::delete('/booking/{id}', [AdminController::class, 'delete_booking'])->name('delete_booking');