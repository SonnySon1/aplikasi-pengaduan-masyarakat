<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Contracts\Encryption\DecryptException;

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
                        $file_foto->move(public_path('photos/pengaduan-photo'), $nama_foto);

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
                $dataShow = [
                        'title' => 'Detail-pengaduan '.$dataPengaduan->judul_pengaduan,
                ];
                $dataTanggapan = Tanggapan::where('pengaduan_id', $dataPengaduan->id)->get();
                return view('user.user-pengaduandetail', compact('dataPengaduan', 'dataTanggapan', 'dataShow'));
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

        public function profile(){
                $dataShow = [
                        'title' => 'Profile By '.auth()->user()->nama,
                ];
                return view('user.user-profile', compact('dataShow'));
        }

        public function update_profile(Request $request){
                $request->validate([
                        'nama'  => 'required',
                        'nik'  => 'required',
                        'alamat'  => 'required',
                        'jenis_kelamin'  => 'required',
                        'no_telepon'  => 'required',
                    ]);
            
                    $data = [
                        'nama'=>$request->input('nama'),
                         'nik'=>$request->input('nik'),
                         'alamat'=>$request->input('alamat'),
                         'jenis_kelamin'=>$request->input('jenis_kelamin'),
                         'no_telepon'=>$request->input('no_telepon'),
                     ];
            
                    $dataUser = User::find(Auth::user()->id);
                    $dataUser->update($data);
                     return redirect('/profile-user');
        }

        // signout
        public function signout(Request $request){
                $request->session()->invalidate(); 
                $request->session()->regenerate();
                return redirect('/');
        }

    


}
