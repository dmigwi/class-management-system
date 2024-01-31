<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['web']], function () {
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.login');
    Route::put('/passwordreset', [AuthController::class, 'passwordreset'])->name('password.reset');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('log.out');
    Route::post('/startattendance', [AttendanceController::class, 'create'])->name('start.attendance');
    Route::put('/endattendance', [AttendanceController::class, 'update'])->name('end.attendance');
    Route::post('/signattendance', [AttendanceController::class, 'attendance'])->name('sign.attendance');
});
