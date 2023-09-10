<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanprosesController extends Controller
{
    // laporan dalam proses
    public function  index(){
        $dataLaporan = Pengaduan::with(['user', 'kategori'])->whereIn('status', ['accepted', 'process'])->latest('tgl_pengaduan')->get();
        $dataKategori = Kategori::all();
        $dataShow = [
            'title' => 'Laporan Dalam Proses',
            'page'  => 'index', 
        ];
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'dataShow','dataKategori'));
    }
}
