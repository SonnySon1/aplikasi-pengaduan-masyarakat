<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Encryption\DecryptException;

class PetugasController extends Controller
{
    // index view petugas --admin
    public function index(){
        $dataPetugas = User::whereIn('role', ['petugas', 'admin'])->latest('created_at')->get();
        return view('admin.petugas.petugas', compact('dataPetugas'));
    }

    // petugas add view --admin
    public function petugas_add(){
        return view('admin.petugas.petugas-add');
    }

    // store add value petugas --admin
    public function store(Request $request){
        $request->validate([
            "val_nama"          => "required",
            "val_nik"           => "required|unique:users,nik",
            "val_alamat"        => "required",
            "val_jeniskelamin"  => "required",
            "val_email"         => "required|unique:users,email",
            "val_password"      => "required",
            "val_notelepon"     => "required|unique:users,no_telepon",
            "val_jabatan"       => "required",
            "val_foto"          => "required|mimes:png,jpg,webp,pdf,png,jpeg"
        ]);

        $nik = $request->val_nik;
        $digit = substr($nik, 0, 6);
        if ($digit != 327902) {
                Session::flash('error', 'Kamu bukan masyarakat Kota Banjar Jawabarat Pataruman');
                return back();
        }
        
        $file_foto = $request->file('val_foto');
        $ekstensi_foto = $file_foto->extension();
        $nama_foto = date('dmyhis').'.'.$ekstensi_foto;
        $file_foto->move(public_path('photos/profile-photo'), $nama_foto);
        
        $data = [
            "nama"          => $request ->val_nama,
            "nik"           => $request ->val_nik,
            "alamat"        => $request ->val_alamat,
            "jenis_kelamin" => $request ->val_jeniskelamin,
            "email"         => $request ->val_email,
            "password"      => bcrypt($request->val_password),
            "no_telepon"    =>$request  ->val_notelepon,
            "foto"          =>$nama_foto,
            "role"          =>$request  ->val_jabatan,
        ];

        User::create($data);
        return redirect('/petugas');
    }


    // edit petugas view --admin
    public function petugas_edit($petugas){
        try {
            $petugas_i_decrypt = Crypt::decrypt($petugas);
        } catch (DecryptException $e) {
            abort(404);
        }
        
        $dataPetugas = User::find($petugas_i_decrypt);
    
        return view('admin.petugas.petugas-edit', compact('dataPetugas'));
    }

    // store edit petugas --admin
    public function update(Request $request, $petugas){
        try {
            $petugas_i_decrypt = Crypt::decrypt($petugas);
        } catch (DecryptException $e) {
            abort(404);
        }

        $request->validate([
            "val_nama"          => "required",
            "val_nik"           => "required",
            "val_alamat"        => "required",
            "val_jeniskelamin"  => "required",
            "val_email"         => "required",
            "val_password"      => "required",
            "val_notelepon"     => "required",
            "val_jabatan"       => "required"
        ]);

        $nik = $request->val_nik;
        $digit = substr($nik, 0, 6);
        if ($digit != 327902) {
                Session::flash('error', 'Kamu bukan masyarakat Kota Banjar Jawabarat Pataruman');
                return back();
        }

        $data = [
            "nama"          => $request ->val_nama,
            "nik"           => $request ->val_nik,
            "alamat"        => $request ->val_alamat,
            "jenis_kelamin" => $request ->val_jeniskelamin,
            "email"         => $request ->val_email,
            "password"      => bcrypt($request->val_password),
            "no_telepon"    =>$request  ->val_notelepon,
            "role"          =>$request  ->val_jabatan,
        ];

        if ($request->hasFile('val_foto')) {
            $request->validate([
                'foto' => 'mimes:png,jpg,webp,pdf,png,jpeg'
            ]);
            
            $file_foto = $request->file('val_foto');
            $ekstensi_foto = $file_foto->extension();
            $nama_foto = date('dmyhis').'.'.$ekstensi_foto;
            $file_foto->move(public_path('photos/profile-photo'), $nama_foto);

            $data = [
                'foto' => $nama_foto
            ];
         }
         

        $dataPetugas = User::find($petugas_i_decrypt);
        $dataPetugas->update($data);
        return redirect('/petugas');
    }

    // petugas detail --admin
    public function show($petugas) {
        try {
            $petugas_i_decrypt = Crypt::decrypt($petugas);
        } catch (DecryptException $e) {
            abort(404);
        }

        $dataPetugas = User::find($petugas_i_decrypt);
        return view('admin.petugas.petugas-detail', compact('dataPetugas'));
    }


    // delete petugas --admin
    public function destroy($petugas){
        try {
            $petugas_i_decrypt = Crypt::decrypt($petugas);
        } catch (DecryptException $e) {
            abort(404);
        }

        $datapetugas = User::find($petugas_i_decrypt);
        $datapetugas->delete();

        return redirect('/petugas');
    }
}
