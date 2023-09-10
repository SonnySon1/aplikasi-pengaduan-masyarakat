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
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Contracts\Encryption\DecryptException;

class PengaduankuController extends Controller
{
        // view halaman index
                public function index(){
                        $dataPengaduan = Pengaduan::with(['kategori', 'user'])->where('user_id', auth()->user()->id)->get();
                        return view('user.user-pengaduan', compact('dataPengaduan'));
                }

        // view buat pengaduan
                public function buatpengaduan(){
                        // nilai kategori
                        $kategoriPengaduan = Kategori::all();
                        return view('user.user-buatpengaduan', compact('kategoriPengaduan'));
        }

        // store pengaduan
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

        // detail pengaduan view
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

        // store  value tanggapan
        public function store_tanggapan(Request $request, $laporan){
                try {
                        $laporan_i_decrypt = Crypt::decrypt($laporan);
                } catch ( DecryptException $e) {
                        abort(404);
                }

                $request->validate([
                        'tanggapan'=>'required'
                ]);

                $dataPengaduan = Pengaduan::find($laporan_i_decrypt);

                $data = [
                        'user_id'   => auth()->user()->id,
                        'pengaduan_id'  => $dataPengaduan->id,
                        'tanggapan' => $request->tanggapan,
                ];
                
                Tanggapan::create($data);
                return redirect()->back();
        }

        // profile show view
        public function profile(){
                $dataShow = [
                        'title' => 'Profile By '.auth()->user()->nama,
                ];
                return view('user.user-profile', compact('dataShow'));
        }


        // update profile
        public function update_profile(Request $request){
                $request->validate([
                        'nama'  => 'required',
                        'nik'  => 'required',
                        'alamat'  => 'required',
                        'jenis_kelamin'  => 'required',
                        'no_telepon'  => 'required',
                    ]);
                    
                $nik = $request->nik;
                $digit = substr($nik, 0, 6);
                if ($digit != 327902) {
                        Session::flash('error', 'Kamu bukan masyarakat Kota Banjar Jawabarat Pataruman');
                        return back();
                }


                    $data = [
                        'nama'=>$request->input('nama'),
                         'nik'=>$request->input('nik'),
                         'alamat'=>$request->input('alamat'),
                         'jenis_kelamin'=>$request->input('jenis_kelamin'),
                         'no_telepon'=>$request->input('no_telepon'),
                     ];
            
                    $dataUser = User::find(Auth::user()->id);

                    if ($request->hasFile('foto')) {
                        $request->validate([
                            'foto' => 'mimes:png,jpg,webp,pdf,png,jpeg'
                        ], [
                            'foto.mimes' => "foto harus berekstensi png,jpg,webp,pdf,png,jpeg",
                        ]);
            
                        $file_foto = $request->file('foto');
                        $ekstensi_foto = $file_foto->extension();
                        $nama_foto = date('dmyhis').'.'.$ekstensi_foto;
                        $file_foto->move(public_path('photos/profile-photo'), $nama_foto);
            
                        $data = [
                            'foto' => $nama_foto
                        ];
                    }

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
