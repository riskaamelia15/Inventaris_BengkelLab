<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*  `
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//hanya untuk role admin
// Route::group(['prefix' => 'admin','middleware' => ['auth','role:admin']], function(){
//     Route::get('/', function(){
//         return 'halaman admin';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile admin';
//     });
// });

// //hanya untuk role pengguna
// Route::group(['prefix' => 'pengguna','middleware' => ['auth','role:pengguna']], function(){
//     Route::get('/', function(){
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile pengguna';
//     });
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/barang', function () {
        return view('barang.index');
    });

    Route::get('/pinjam', function () {
        return view('peminjaman.index');
    });

    Route::get('/pengembalian', function () {
        return view('pengembalian.index');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('barang', BarangController::class);
    Route::resource('barang_keluar', BarangKeluarController::class);
    Route::resource('pinjam', PinjamController::class);
    Route::resource('pengembalian', PengembalianController::class);
    Route::resource('laporan', LaporanController::class);
});
