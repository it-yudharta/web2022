<?php

use App\Models\User;
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
    return view('welcome');
});

Route::get('/info', function () {
    return '(201969040099) Cahya Bagus Sanjaya';
});

Route::get('/app', function () {
    // untuk mengakses kofigurasi
    return config('app.name');
});

Route::get('/users', function() {
    // Digunakan untuk Melihat Semua User yang ada di dalam database
    return User::all();
});
