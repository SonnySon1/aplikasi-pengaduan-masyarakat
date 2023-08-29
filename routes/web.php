<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduankuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->middleware('guest');

// auth
Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'login_view'])->name('auth.login');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.user.login');
    Route::get('/register', [RegisterController::class, 'register_view'])->name('auth.register');
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.user.register');
    Route::post('/logout', [LoginController::class, 'logout']);
});


// masyarakat
Route::middleware('masyarakat')->group(function(){
    Route::get('/pengaduanku', [PengaduankuController::class, 'index']);
    Route::get('/buat-pengaduan', [PengaduankuController::class, 'buatpengaduan']);
    Route::get('/show/{pengaduan}', [PengaduankuController::class, 'show']);
    Route::post('/storepengaduan', [PengaduankuController::class, 'storepengaduan']);
    Route::get('/signoput', [PengaduankuController::class, 'signout']);
});


// admin  

Route::middleware('admin')->group(function(){
    // dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/signout-staf', [DashboardController::class, 'signout_staf']);
    // masyarakat Admin
    Route::view('/masyarakat', 'admin.masyarakat.masyarakat');
    Route::view('/masyarakatadd', 'admin.masyarakat.masyarakat-add');
    // petugas Admin
    Route::view('/petugas', 'admin.petugas.petugas');
    Route::view('/petugas-add', 'admin.petugas.petugas-add');
    // kategori Admin
    Route::view('/kategori', 'admin.kategori.kategori');
    Route::view('/kategori-add', 'admin.kategori.kategori-add');
    // laporan Admin
    Route::get('/laporanmasuk', [LaporanController::class, 'index']);
    Route::get('/laporanmasuk-detail/{laporan}', [LaporanController::class, 'show']);
    Route::post('/laporan-update/{status}', [LaporanController::class, 'update']);
    // report
    Route::view('/generate-report', 'admin.report.generate-report');
});
