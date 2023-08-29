<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LaporanController extends Controller
{
    public function index(){
        $dataLaporan = Pengaduan::all();
        $kategori = Kategori::all();
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'kategori'));
    }

    public function show($laporan){
        try {
            $laporan_i_crypt = Crypt::decrypt($laporan);
        } catch (DecryptException $e) {
            abort(404);
        }   
        $dataLaporan = Pengaduan::find($laporan_i_crypt);
        return view('admin.laporan.laporanmasuk-detail', compact('dataLaporan'));
    }


    public function update(Request $request, $id){
        $dataSatus = [
            "status" => $request->status
        ];
        $dataPengaduan = Pengaduan::find($id);
        $dataPengaduan->update($dataSatus);
        return redirect('/laporanmasuk');
    }
}
