<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/nn');
});
Route::get('/nn', [AdminController::class, 'nn'])->name('nn');
Route::get('/ticketlist', [AdminController::class, 'ticketlist'])->name('ticketlist');

Route::get('/admin', [AdminController::class, 'index'])->name('home');
Route::get('/login', [AdminController::class, 'login'])->name('login');
// Route::get('/register', [AdminController::class, 'register'])->name('register');

Route::get('/download-pdf/{id}', [AdminController::class, 'download-pdf'])->name('download_pdf');

Route::get('/add_bookings', [AdminController::class, 'add_bookings'])->name('add_bookings');
Route::get('/show_booking', [AdminController::class, 'show_booking'])->name('show_booking');
Route::get('/booking_api', [AdminController::class, 'booking_api'])->name('booking_api');

Route::delete('/booking/{id}', [AdminController::class, 'delete_booking'])->name('delete_booking');
Route::delete('/user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');


Route::get('/log_out', [AdminController::class, 'log_out'])->name('log_out');

Route::post('/getAdditionalInfo', [AdminController::class, 'getAdditionalInfo'])->name('getAdditionalInfo');


Route::get('/add_user', [AdminController::class, 'add_user'])->name('add_user');
Route::get('/show_user', [AdminController::class, 'show_user'])->name('show_user');

Route::post('/user_status', [AdminController::class, 'user_status'])->name('user_status');
Route::post('/login_user', [AdminController::class, 'login_user'])->name('login_user');

Route::get('/daterange', 'DateRangeController@index')->name('daterange.index');

Route::post('/add_booking', [AdminController::class, 'add_booking'])->name('add_booking');

require __DIR__ . '/category.php';