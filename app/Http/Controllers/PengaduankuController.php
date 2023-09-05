<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Date;
use Symfony\Component\VarDumper\VarDumper;

class PengaduankuController extends Controller
{
        // halaman index
                public function index(){
                        $dataPengaduan = Pengaduan::with(['kategori', 'user'])->where('user_id', auth()->user()->id)->get();
                        return view('user.user-pengaduan', compact('dataPengaduan'));
                }

        // buat pengaduan
                public function buatpengaduan(){
                        // nilai kategori
                        $kategoriPengaduan = Kategori::all();
                        return view('user.user-buatpengaduan', compact('kategoriPengaduan'));
        }

        // storepengaduan
                public function storepengaduan(Request $request){
                        $request->validate([
                                'judul_pengaduan'   => 'required',
                                'kategori'          => 'required',
                                'isi_pengaduan'     => 'required',
                                'foto'              => 'required|mimes:png,jpg,jpeg,gif'
                        ]);

                        $file_foto = $request->file('foto');
                        $foto_extensi = $file_foto->extension();
                        $nama_foto = date('dmyhis').'.'. $foto_extensi;
                        $file_foto->move(public_path('foto'), $nama_foto);

                        $dataPengaduan = [
                                'judul_pengaduan'       =>  $request->input('judul_pengaduan'),
                                'user_id'               =>  auth()->user()->id,   
                                'kategori_id'           =>  $request->input('kategori'),
                                'laporan_pengaduan'     =>  $request->input('isi_pengaduan'),
                                'foto'                  =>  $nama_foto
                        ];      

                        Pengaduan::create($dataPengaduan);
                        return redirect('/pengaduanku');
                }

        // show
        public function show($pengaduan) {
                try {
                        $pengaduan_i_decrypt = Crypt::decrypt($pengaduan);
                } catch (DecryptException $e) {
                        abort(404);
                }

                $dataPengaduan = Pengaduan::find($pengaduan_i_decrypt);
                $dataTanggapan = Tanggapan::where('pengaduan_id', $dataPengaduan->id)->get();
                return view('user.user-pengaduandetail', compact('dataPengaduan', 'dataTanggapan'));
        }

        public function store_tanggapan(Request $request, $laporan){
                try {
                        $laporan_i_decrypt = Crypt::decrypt($laporan);
                } catch ( DecryptException $e) {
                        abort(404);
                }

                $dataPengaduan = Pengaduan::find($laporan_i_decrypt);

                $data = [
                        'user_id'   => auth()->user()->id,
                        'pengaduan_id'  => $dataPengaduan->id,
                        'tanggapan' => $request->tanggapan,
                ];
                
                Tanggapan::create($data);
                return redirect('/pengaduanku');
        }

        // signout
        public function signout(Request $request){
                $request->session()->invalidate(); 
                $request->session()->regenerate();
                return redirect('/');
        }

    


}
