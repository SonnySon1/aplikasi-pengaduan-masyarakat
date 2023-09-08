<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanselesaiController extends Controller
{
    public function index(){
        $dataLaporan = Pengaduan::with(['user', 'kategori'])->whereIn('status', ['finished', 'rejected'])->get();
        $dataKategori = Kategori::all();;
        $dataShow = [
            'title' => 'Laporan Selesai',
            'page'  => 'index', 
        ];
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'dataShow', 'dataKategori'));
    }
}
