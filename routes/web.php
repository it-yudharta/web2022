<?php

use App\Http\Controllers\ProductController;
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

Route::get('/halo/{nama?}', function($nama = 'Pengunjung') {
    return 'Halo '. $nama;
});

Route::prefix('/products', function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/', [ProductController::class, 'store']);
    Route::get('/{product}', [ProductController::class, 'show']);
    Route::get('/{product}/edit', [ProductController::class, 'edit']);
    Route::put('/{product}', [ProductController::class, 'update']);
    Route::delete('/{product}', [ProductController::class, 'destroy']);
});

// Route::resource('products', ProductController::class);
