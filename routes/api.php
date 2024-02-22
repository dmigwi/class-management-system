<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;

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
    Route::post('/logout', [AuthController::class, 'destroy'])->name('log.out');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.login');
    Route::put('/passwordreset', [AuthController::class, 'passwordreset'])->name('password.reset');
    Route::post('/startattendance', [AttendanceController::class, 'store'])->name('start.attendance');
    Route::post('/endattendance', [AttendanceController::class, 'update'])->name('end.attendance');
    Route::get('/setattendance', [AttendanceController::class, 'attendance'])->name('set.attendance');
    Route::post('/insertuser', [HomeController::class, 'storeUser'])->name('insert.user');
    Route::post('/insertunit', [HomeController::class, 'storeUnit'])->name('insert.unit');
});
