<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    // index profile --admin
    public function index(){
        return view('admin.profile.profile');
    }

    // update store profile --admin
    public function update(Request $request){
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
         return redirect('/profile');
    }
}
