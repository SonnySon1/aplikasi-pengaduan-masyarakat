<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanselesaiController extends Controller
{
    public function index(){
        $dataLaporan = Pengaduan::whereIn('status', ['finished', 'rejected'])->get();
        $dataShow = [
            'title' => 'Laporan Selesai',
            'page'  => 'index', 
        ];
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'dataShow'));
    }
}
