<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PetugasController extends Controller
{
    public function index(){
        $dataPetugas = User::whereIn('role', ['petugas', 'admin'])->latest('created_at')->get();
        return view('admin.petugas.petugas', compact('dataPetugas'));
    }

    public function petugas_add(){
        return view('admin.petugas.petugas-add');
    }

    public function store(Request $request){
        $request->validate([
            "val_nama"          => "required",
            "val_nik"           => "required|unique:users,nik",
            "val_alamat"        => "required",
            "val_jeniskelamin"  => "required",
            "val_email"         => "required|unique:users,email",
            "val_password"      => "required",
            "val_notelepon"     => "required|unique:users,no_telepon",
            "val_jabatan"       => "required"
        ]);
        
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

        User::create($data);
        return redirect('/petugas');
    }


    public function petugas_edit($petugas){
        try {
            $petugas_i_decrypt = Crypt::decrypt($petugas);
        } catch (DecryptException $e) {
            abort(404);
        }
        
        $dataPetugas = User::find($petugas_i_decrypt);
    
        return view('admin.petugas.petugas-edit', compact('dataPetugas'));
    }

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

        $dataPetugas = User::find($petugas_i_decrypt);
        $dataPetugas->update($data);
        return redirect('/petugas');
    }

    public function show($petugas) {
        try {
            $petugas_i_decrypt = Crypt::decrypt($petugas);
        } catch (DecryptException $e) {
            abort(404);
        }

        $dataPetugas = User::find($petugas_i_decrypt);
        return view('admin.petugas.petugas-detail', compact('dataPetugas'));
    }

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
