<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/attendance', function () {
    return view('attendance');
});

Route::get('/chat', function () {
    return view('chat');
});

