<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // dashboard
    public function index(){
        $laporanMasuk = Pengaduan::with('kategori')->where('status', 'new')->latest('tgl_pengaduan')->get();
        $laporanBaru = Pengaduan::where('status', 'new')->get();
        $laporan = Pengaduan::whereIn('status', ['process', 'accepted', 'finished', 'rejected'])->get();
        $kategori = Kategori::all();
        $masyarakat = User::where('role', 'masyarakat')->get();
    
        return view('admin.dashboard', compact('laporanMasuk', 'laporanBaru', 'laporan', 'kategori', 'masyarakat'));
    }

    // signout staf 1
    public function signout_staf(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    
    // signout staf dan masyarakat
    public function signout(Request $request){
        $request->session()->invalidate(); 
        $request->session()->regenerate();
        return redirect('/');
    }
}
