<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // login view
    public function login_view(){
        return view('auth.login');
    }

    // login store
    public function login(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            $request->session()->regenerate();

            if( Auth::user()->role == "masyarakat" ){

                return redirect()->intended('pengaduanku');

            }else if(Auth::user()->role == "admin"){

                return redirect()->intended('dashboard');

            }
        }else{
           session()->flash('error', 'Email / Password Salah');
           return back();
        }
    }


    // logout
        public function logout(Request $request) {
                Auth::logout();
                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/login');
        }
}
