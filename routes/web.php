<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AttendanceController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::group(['middleware' => ['web']], function () {
    Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('dashboard');
    Route::get('/chat', [ChatController::class, 'index'])->middleware('auth');
    Route::get('/attendance', [AttendanceController::class, 'index'])->middleware('auth');
});

