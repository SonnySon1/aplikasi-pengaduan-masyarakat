<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanprosesController extends Controller
{
    public function  index(){
        $dataLaporan = Pengaduan::whereIn('status', ['accepted', 'process'])->get();
        $dataShow = [
            'title' => 'Laporan Dalam Proses',
            'page'  => 'index', 
        ];
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'dataShow'));
    }
}
