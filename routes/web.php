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



Route::get('/log_out', [AdminController::class, 'log_out'])->name('log_out');

Route::post('/getAdditionalInfo', [AdminController::class, 'getAdditionalInfo'])->name('getAdditionalInfo');



Route::post('/login_user', [AdminController::class, 'login_user'])->name('login_user');

Route::post('/add_booking', [AdminController::class, 'add_booking'])->name('add_booking');

require __DIR__ . '/category.php';
require __DIR__ . '/booking.php';
require __DIR__ . '/user.php';