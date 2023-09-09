<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ReportController extends Controller
{
    public function index(){
            return view('admin.report.generate-report');
    }
    public function report_rekap_show(Request $request){

        date_default_timezone_set('Asia/Jakarta');
        $time = date('d F Y');
    
        // Ambil nilai inputan dari user
        $bulan = $request->input('val_bulan2');
        $tahun = $request->input('val_tahun2');
    
        // Query ke database untuk mengambil data pengadauan bersarkan tahun dan bulan
        $dataLaporan = Pengaduan::whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->get();
    
        // hutung jumlah 
        $kategoriCounts = Pengaduan::select('kategori_id')
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->groupBy('kategori_id')
            ->selectRaw('count(*) as count')
            ->get();
    
        // Mengambil daftar kategori yang sesuai dengan pengaduan
        $kategoris = Kategori::whereIn('id', $kategoriCounts->pluck('kategori_id'))->get();
    
        return view('admin.report.generate-report-rekap', compact('dataLaporan', 'tahun', 'bulan', 'time', 'kategoris', 'kategoriCounts'));
    }


    public function report_periode_show(Request $request){
        
        date_default_timezone_set('Asia/Jakarta');
        $time = date('d F Y');
        
        // Ambil nilai inputan form
        $bulan = $request->input('val_bulan');
        $tahun = $request->input('val_tahun');
        $status = $request->input('val_status');
    
        // Query ke database untuk mengambil data pengaduan
            $dataLaporan = Pengaduan::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->where('status', $status)
                ->get();


       return view('admin.report.generate-report-periode', compact('dataLaporan','tahun','bulan','time'));
    }



}
