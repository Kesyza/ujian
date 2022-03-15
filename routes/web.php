<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PaketSoalController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UjianController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', function () {
        return 'halaman admin';
    });

    Route::get('/profile', function () {
        return 'halaman profile admin';
    });
});

Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function(){
    Route::get('/', function () {
        return 'halaman pengguna';
    });

    Route::get('/profile', function () {
        return 'halaman profile pengguna';
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::resource('/pengguna', PenggunaController::class);
    Route::resource('/mataPelajaran', MapelController::class);
    Route::resource('/paketSoal', PaketSoalController::class);
    Route::resource('/soal', SoalController::class);
    Route::resource('/ujian', UjianController::class);
});
