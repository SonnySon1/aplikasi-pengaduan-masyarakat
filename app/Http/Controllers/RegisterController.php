<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // register view 
    public function register_view(){
        return view('auth.register');
    }

    // register store
    public function register(Request $request) {

        // lakukan validasi
        $request->validate([
            'nama'      => 'required',
            'nik'       => 'required|unique:users,nik',
            'alamat'    => 'required',
            'email'     => 'required|unique:users,email',
            'no_telepon'=> 'required|unique:users,email',
            'password'  => 'required',
        ]);

        // photo profile default 
        $photoProfile = [
             'profile1.png',
             'profile2.png',
             'profile3.png',
             'profile4.png',
             'profile5.png',
             'profile6.png',
             'profile7.png',
             'profile8.png',
             'profile9.png',
             'profile10.png',
        ];

        // mix photo
        $photoRandom = rand(0, 9);
        $photo = $photoProfile[$photoRandom];

        // siapkan data user untuk di store ke da;am databas 
        $data = [
           'nama'=>$request->input('nama'),
            'nik'=>$request->input('nik'),
            'alamat'=>$request->input('alamat'),
            'email'=>$request->input('email'),
            'no_telepon'=>$request->input('no_telepon'),
            'foto'  => $photo,
            'password'=> bcrypt($request->input('password')),
        ];

        // store data user register
        $checkUserData = User::create($data);

        // jika berhasil masukan ke halaman login
        if ($checkUserData == true) {
            return redirect('/login');
        }

    }
}
