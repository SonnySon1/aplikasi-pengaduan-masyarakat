<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Encryption\DecryptException;

class MasyarakatController extends Controller
{
    // index view masyarakat di admin
    public function index(){
        $dataMasyarakat = User::where('role', 'masyarakat')->latest('created_at')->get();
        return view('admin.masyarakat.masyarakat', compact('dataMasyarakat'));
    }

    // view add masyarakat
    public function masyarakat_add(){
            return view('admin.masyarakat.masyarakat-add');
    }

    // store value masyarakat di admin
    public function store(Request $request){
        $request->validate([
            "val_nama"          => "required",
            "val_nik"           => "required|unique:users,nik",
            "val_alamat"        => "required",
            "val_jeniskelamin"  => "required",
            "val_email"         => "required|unique:users,email",
            "val_password"      => "required",
            "val_notelepon"     => "required|unique:users,no_telepon",
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
            "no_telepon"    => $request  ->val_notelepon,
            "foto"          => $nama_foto,
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
            "val_notelepon"     => "required",
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
            "no_telepon"    =>$request  ->val_notelepon,
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
        
        
        
        $dataMasyarakat = User::find($masyarakat_i_decrypt);
        $dataMasyarakat->update($data);
        return redirect('/masyarakat');
    }






    public function show($masyarakat){
        try {
            $masyarakat_i_decrypt = Crypt::decrypt($masyarakat);
        } catch (DecryptException $e) {
            abort(404);
        }

        $dataMasyarakat = User::find($masyarakat_i_decrypt);

        return view('admin.masyarakat.masyarakat-detail', compact('dataMasyarakat'));
    }





    public function destroy($masyarakat){
        try {
            $masyarakat_i_decrypt = Crypt::decrypt($masyarakat);
        } catch (DecryptException $e) {
            abort(404);
        }

        $dataMasyarakat = User::find($masyarakat_i_decrypt);
        $dataMasyarakat->delete();

        return redirect('/masyarakat');
    }
}
