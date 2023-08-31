<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PetugasController extends Controller
{
    public function index(){
        $dataPetugas = User::all();
        return view('admin.petugas.petugas', compact('dataPetugas'));
    }

    public function petugas_add(){
        return view('admin.petugas.petugas-add');
    }

    public function store(Request $request){

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
}
