<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;

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
    Route::post('/startAttendance', [AttendanceController::class, 'store'])->name('start.attendance');
    Route::post('/endAttendance', [AttendanceController::class, 'update'])->name('end.attendance');
    Route::get('/setAttendance', [AttendanceController::class, 'attendance'])->name('set.attendance');
    Route::post('/insertUser', [HomeController::class, 'storeUser'])->name('insert.user');
    Route::post('/insertUnit', [HomeController::class, 'storeUnit'])->name('insert.unit');
    Route::put('/updateUser/{id}', [HomeController::class, 'updateUser'])->name('update.user');
    Route::put('/updateUnit/{id}', [HomeController::class, 'updateUnit'])->name('update.unit');
    Route::post('/deleteUser/{id}', [HomeController::class, 'destroyUser'])->name('delete.user');
    Route::post('/deleteUnit/{id}', [HomeController::class, 'destroyUnit'])->name('delete.unit');
    Route::post('/chatMessage', [ChatController::class, 'store'])->name('post.message');
});
