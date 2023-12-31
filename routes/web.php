<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanprosesController;
use App\Http\Controllers\LaporanselesaiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduankuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
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

Route::get('/', [UserController::class, 'index']);
Route::post('/signout', [LoginController::class, 'signout']);

// auth
Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'login_view'])->name('auth.login');
    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    Route::post('/login', [LoginController::class, 'login'])->name('auth.user.login');
    Route::get('/register', [RegisterController::class, 'register_view'])->name('auth.register');
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.user.register');
});


// masyarakat
Route::middleware('masyarakat')->group(function(){
    Route::get('/pengaduanku', [PengaduankuController::class, 'index']);
    Route::get('/buat-pengaduan', [PengaduankuController::class, 'buatpengaduan']);
    Route::get('show/{pengaduan}', [PengaduankuController::class, 'show']);
    Route::post('/storepengaduan', [PengaduankuController::class, 'storepengaduan']);
    Route::get('/signoput', [PengaduankuController::class, 'signout']);
    Route::post('/tanggapi-pengaduan/{pengaduan}', [ PengaduankuController::class, 'store_tanggapan']);
    Route::get('/profile-user', [ PengaduankuController::class, 'profile']);
    Route::post('/user-update-profile', [ PengaduankuController::class, 'update_profile']);
});


// admin and petugas
Route::middleware(['adminandpetugas'])->group(function(){

      

        // dashboard Admin and petugas
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/signoput-staff', [DashboardController::class, 'signout']);

        // profile 
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::post('/update-profile', [ProfileController::class, 'update']);

        // laporan Admin
        Route::get('/laporanmasuk', [LaporanController::class, 'index']);
        Route::get('/laporan-detail/{laporan}', [LaporanController::class, 'show']);
        Route::post('/laporan-update/{status}', [LaporanController::class, 'update']);
        Route::post('/tanggapan-store/{tanggapan}', [LaporanController::class, 'store']);
        Route::post('filter-by-status', [LaporanController::class, 'filter_by_status']);

        // laporan dalam proses
        Route::get('/laporan-dalam-proses', [LaporanprosesController::class, 'index']);

        // Laporan selesai
        Route::get('/laporan-selesai', [LaporanselesaiController::class, 'index']);
});




// admin  
Route::middleware('admin')->group(function(){
    // masyarakat Admin
    Route::get('/masyarakat', [MasyarakatController::class, 'index']);
    Route::get('/masyarakat-add', [MasyarakatController::class, 'masyarakat_add']);
    Route::post('/masyarakat/store', [MasyarakatController::class, 'store']);
    Route::get('/masyarakat-edit/{masyarakat}', [MasyarakatController::class, 'masyarakat_edit']);
    Route::post('/masyarakat-update/{masyarakat}', [MasyarakatController::class, 'update']);
    Route::get('/masyarakat-detail/{masyarakat}', [MasyarakatController::class, 'show']);
    Route::get('/masyarakat-delete/{masyarakat}', [MasyarakatController::class, 'destroy']);

    // petugas Admin
    Route::get('/petugas', [PetugasController::class, 'index']);
    Route::get('/petugas-add', [PetugasController::class, 'petugas_add']);
    Route::post('/petugas-store', [PetugasController::class, 'store']);
    Route::get('/petugas-edit/{petugas}', [PetugasController::class, 'petugas_edit']);
    Route::post('/petugas-update/{petugas}', [PetugasController::class, 'update']);
    Route::get('/petugas-detail/{petugas}', [PetugasController::class, 'show']);
    Route::get('/petugas-delete/{petugas}', [PetugasController::class, 'destroy']);

    // kategori Admin
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori-add', [KategoriController::class, 'kategori_add']);
    Route::post('/kategori-store', [KategoriController::class, 'store']);
    Route::get('/kategori-delete/{kategori}',[KategoriController::class, 'destroy']);
    Route::get('/kategori-edit/{kategori}', [KategoriController::class, 'kategori_edit']);
    Route::post('/kategori-update/{kategori}', [KategoriController::class, 'update']);
    Route::get('/kategori-detail/{kategori}', [KategoriController::class, 'show']);

    // report admin
    Route::get('/generate-report', [ReportController::class, 'index']);
    Route::post('/generate-report-periode', [ReportController::class, 'report_periode_show']);
    Route::post('/generate-report-rekap', [ReportController::class, 'report_rekap_show']);
    Route::post('/generate-report-periode', [ReportController::class, 'report_periode_show']);
});
