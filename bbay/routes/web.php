<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminkeuanganController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokumentasifotoController;
use App\Http\Controllers\DokumentasiKegiatanController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\TentangKamiController;

Route::get('/', function () {
    return view('/landing');
});

Route::get('/landing', [LandingPageController::class, 'index'])->name('landing');
Route::get('/laporan', [LaporanKeuanganController::class, 'index'])->name('laporankeuangan');
Route::get('/laporanpemasukan', [LaporanKeuanganController::class, 'in'])->name('laporanpemasukan');
Route::get('/laporanpengeluaran', [LaporanKeuanganController::class, 'out'])->name('laporanpengeluaran');
Route::get('/tentang', [TentangKamiController::class, 'index'])->name('tentangkami');
Route::get('/dokumentasi', [DokumentasiKegiatanController::class, 'index'])->name('dokumentasikegiatan');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi');
Route::post('/donasi', [DonasiController::class, 'submit'])->name('submit_donation');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/create', [UserController::class, 'index']);
    Route::post('/user', [UserController::class, 'create']);
    Route::post('/dokumentasi', [ActivityController::class, 'submit'])->name('submit_dokumentasi');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/upload', [ActivityController::class, 'index'])->name('uploadfoto');

    Route::get('/editfoto/{id}', [ActivityController::class, 'edit'])->name('editfoto');
    Route::post('/editfoto/{id}', [ActivityController::class, 'update'])->name('edit.foto.post');
    Route::get('/deletefoto/{id}', [ActivityController::class, 'destroy'])->name('delete.foto');

    Route::get('/adminkeuangan', [AdminkeuanganController::class, 'index'])->name('adminkeuangan');
    Route::get('/adminpemasukan', [AdminkeuanganController::class, 'create'])->name('adminpemasukan');
    Route::get('/pemasukan/update/{id}', [AdminkeuanganController::class, 'update'])->name('update_pemasukan');
    Route::post('/pemasukan/update/{id}', [AdminkeuanganController::class, 'update_pemasukan'])->name('update_pemasukan_save');
    //tombol verif,reject,cancel
    Route::get('/adminkeuangan/verif/{id}', [AdminkeuanganController::class, 'verified'])->name('keuangan_verified');
    Route::get('/adminkeuangan/reject/{id}', [AdminkeuanganController::class, 'rejected'])->name('keuangan_rejected');
    Route::get('/adminkeuangan/cancel/{id}', [AdminkeuanganController::class, 'canceled'])->name('keuangan_canceled');

    Route::get('/pengeluaran', [PengeluaranController::class, 'create'])->name('pengeluaran');
    Route::post('/pengeluaran', [PengeluaranController::class, 'store'])->name('tambah_pengeluaran');
    Route::get('/adminpengeluaran', [PengeluaranController::class, 'index'])->name('data_pengeluaran');
});
