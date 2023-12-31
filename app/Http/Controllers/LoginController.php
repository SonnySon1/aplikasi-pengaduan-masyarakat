<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            $request->session()->regenerate();

            if( Auth::user()->role == "masyarakat" ){

                return redirect()->intended('pengaduanku');

            }else if(Auth::user()->role == "admin"){

                return redirect()->intended('dashboard');

            }else if(Auth::user()->role == "petugas"){

                return redirect()->intended('dashboard');
            }
          
        }else{
            $dataUser = User::where('email', $request->email)->first();

            if ($dataUser->is_google_user) {
                session()->flash('error', 'pengguna ini mendaftar dengan Google');
                return back();
            } else {
                session()->flash('error', 'email atau password salah');
                return back();
            }

        }
    }


    // logout
        public function signout(Request $request) {
                Auth::logout();
                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/login');
        }
}
