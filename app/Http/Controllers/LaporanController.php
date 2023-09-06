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
    public function index(){
        $dataLaporan = Pengaduan::with(['user', 'kategori'])->where('status', 'new')->get();
        $kategori = Kategori::all();
        $dataShow = [
            'title' => 'Laporan Masuk',
            'page'  => 'index', 
        ];
        return view('admin.laporan.laporanmasuk', compact('dataLaporan', 'kategori', 'dataShow'));
    }

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


    public function update(Request $request, $id){
        $dataSatus = [
            "status" => $request->status
        ];

        $dataPengaduan = Pengaduan::find($id);
        $dataPengaduan->update($dataSatus);

        if ($request->status == "accepted" || "process") {
            return redirect('/laporan-dalam-proses');
        }
        elseif ($request->status == "rejected" || "finished") {
            return redirect('/laporan-selesai');
        }
    }

    public function store(Request $request, $laporan){
            try {
                $laporan_i_crypt = Crypt::decrypt($laporan); 
            } catch (\Throwable $th) {
                abort(404);
            }

            $dataPengaduan = Pengaduan::find($laporan_i_crypt);

            $data = [
                'user_id'   => auth()->user()->id,
                'pengaduan_id'  => $dataPengaduan->id,
                'tanggapan' => $request->tanggapan,
                'foto' => 'foto.jpg',
            ];
            
            Tanggapan::create($data);
            return redirect('/laporanmasuk');
    }


    public function filter_by_status(Request $request){
        $dataLaporan = Pengaduan::where('status', $request->filter)->get();
        return view('admin.laporan.laporanmasuk', compact('dataLaporan'));
    }
}
