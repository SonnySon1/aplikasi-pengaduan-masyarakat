<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\VarDumper\VarDumper;

class PengaduankuController extends Controller
{
        // halaman index
                public function index(){
                        $dataPengaduan = Pengaduan::with(['kategori', 'user'])->where('id_user', auth()->user()->id)->get();
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
                                'id_user'               =>  auth()->user()->id,   
                                'id_kategori'           =>  $request->input('kategori'),
                                'laporan_pengaduan'     =>  $request->input('isi_pengaduan'),
                                'foto'                  =>  $nama_foto
                        ];      

                        Pengaduan::create($dataPengaduan);
                        return redirect('/pengaduanku');
                }

        // show
        public function show(Pengaduan $pengaduan) {
                return view('user.user-pengaduandetail', compact('pengaduan'));
        }

        // signout
                public function signout(Request $request){
                        $request->session()->invalidate(); 
                        $request->session()->regenerate();
                        return redirect('/');
                }

    


}
