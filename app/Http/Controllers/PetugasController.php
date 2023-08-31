<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            "nama" => $request->val_nama,
            "nik"  => $request->val_nik,
            "alamat"=> $request->val_alamat,
            "email" => $request->val_email,
            "password" => bcrypt($request->val_password),
            "no_telepon"=>$request->val_notelepon,
        ];
    }
}
