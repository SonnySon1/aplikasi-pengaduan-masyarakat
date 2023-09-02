<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class MasyarakatController extends Controller
{
    public function index(){
        $dataMasyarakat = User::where('role', 'masyarakat')->get();
        return view('admin.masyarakat.masyarakat', compact('dataMasyarakat'));
    }

    public function masyarakat_add(){
            return view('admin.masyarakat.masyarakat-add');
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
        ]);
        
        $data = [
            "nama"          => $request ->val_nama,
            "nik"           => $request ->val_nik,
            "alamat"        => $request ->val_alamat,
            "jenis_kelamin" => $request ->val_jeniskelamin,
            "email"         => $request ->val_email,
            "password"      => bcrypt($request->val_password),
            "no_telepon"    =>$request  ->val_notelepon,
        ];

        User::create($data);
        return redirect('/masyarakat');
    }

    public function masyarakat_edit($masyarakat){
        try {
            $masyarakat_i_decrypt = Crypt::decrypt($masyarakat);
        } catch (DecryptException $e) {
            abort(404);
        }
        
        $dataMasyarakat = User::find($masyarakat_i_decrypt);
    
        return view('admin.masyarakat.masyarakat-edit', compact('dataMasyarakat'));
    }

    public function update(Request $request, $masyarakat) {
        try {
            $masyarakat_i_decrypt = Crypt::decrypt($masyarakat);
        } catch (DecryptException $e) {
            abort(404);
        }

        $request->validate([
            "val_nama"          => "required",
            "val_nik"           => "required",
            "val_alamat"        => "required",
            "val_jeniskelamin"  => "required",
            "val_email"         => "required",
            "val_notelepon"     => "required",
        ]);
        
        $data = [
            "nama"          => $request ->val_nama,
            "nik"           => $request ->val_nik,
            "alamat"        => $request ->val_alamat,
            "jenis_kelamin" => $request ->val_jeniskelamin,
            "email"         => $request ->val_email,
            "no_telepon"    =>$request  ->val_notelepon,
        ];
        
        $dataMasyarakat = User::find($masyarakat_i_decrypt);
        $dataMasyarakat->update($data);
        return redirect('/masyarakat');
    }
}
