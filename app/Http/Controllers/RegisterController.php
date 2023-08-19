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
        $request->validate([
            'nama'      => 'required',
            'nik'       =>'required|unique:users,nik',
            'alamat'    => 'required',
            'email'     => 'required|unique:users,email',
            'no_telepon'     => 'required|unique:users,email',
            'password'  =>'required',
        ]);

        $data = [
           'nama'=>$request->input('nama'),
            'nik'=>$request->input('nik'),
            'alamat'=>$request->input('alamat'),
            'email'=>$request->input('email'),
            'no_telepon'=>$request->input('no_telepon'),
            'password'=> bcrypt($request->input('password')),
        ];

        $checkUserData = User::create($data);

        if ($checkUserData == true) {
            return redirect('/login');
        }

    }
}
