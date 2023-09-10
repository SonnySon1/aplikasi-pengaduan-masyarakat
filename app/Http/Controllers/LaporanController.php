<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use PhpParser\Node\Expr\New_;

class LaporanController extends Controller
{
    // laporan index view
    public function index(){
        $dataLaporan = Pengaduan::with(['user', 'kategori'])->where('status', 'new')->latest('tgl_pengaduan')->get();
        $dataKategori = Kategori::all();
        $dataShow = [
            'title' => 'Laporan Masuk',
            'page'  => 'index', 
        ];
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'dataKategori', 'dataShow'));
    }

    // detail pengaduan
    public function show($laporan){
        try {
            $laporan_i_crypt = Crypt::decrypt($laporan);
        } catch (DecryptException $e) {
            abort(404);
        }   
        $dataLaporan = Pengaduan::find($laporan_i_crypt);
        $dataTanggapan = Tanggapan::with(['user'])->where('pengaduan_id', $dataLaporan->id)->get();
        return view('admin.laporan.laporanmasuk-detail', compact('dataLaporan', 'dataTanggapan'));
    }

// update status store value
    public function update(Request $request, $id){
        $dataSatus = [
            "status" => $request->status
        ];

        $dataPengaduan = Pengaduan::find($id);
        $dataPengaduan->update($dataSatus);

        if ($dataPengaduan->status == "accepted" || $dataPengaduan->status == "process") {
            return redirect('/laporan-dalam-proses');
        }
        elseif ($dataPengaduan->status == "rejected" || $dataPengaduan->status == "finished") {
            return redirect('/laporan-selesai');
        }
    }

    // value tanggapan store
    public function store(Request $request, $laporan){
            try {
                $laporan_i_crypt = Crypt::decrypt($laporan); 
            } catch (\Throwable $th) {
                abort(404);
            }

            $request->validate([
                'tanggapan'=>'required'
            ]);


            $dataPengaduan = Pengaduan::find($laporan_i_crypt);

            $data = [
                'user_id'   => auth()->user()->id,
                'pengaduan_id'  => $dataPengaduan->id,
                'tanggapan' => $request->tanggapan,
            ];
            
            Tanggapan::create($data);
            return redirect()->back();
    }

// filter by status
    public function filter_by_status(Request $request){
        $dataLaporan = Pengaduan::where('status', $request->filter)->get();
        return view('admin.laporan.laporanmasuk', compact('dataLaporan'));
    }
}
