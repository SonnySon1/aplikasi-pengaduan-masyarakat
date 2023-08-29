<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $laporanMasuk = Pengaduan::all();
        $laporanBaru = Pengaduan::where('status', 'new')->get();
        $laporan = Pengaduan::where('status', 'process')->orWhere('status', 'accepted')->orWhere('status', 'finished')->orWhere('status', 'rejected')->get();
        $kategori = Kategori::all();
        $masyarakat = User::where('role', 'masyarakat')->get();


        return view('admin.dashboard', compact('laporanMasuk', 'laporanBaru', 'laporan', 'kategori', 'masyarakat'));
    }

    public function signout_staf(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
