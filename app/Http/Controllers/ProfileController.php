<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.profile');
    }

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
        $dataUser->update($data);
         return redirect('/profile');
    }
}
