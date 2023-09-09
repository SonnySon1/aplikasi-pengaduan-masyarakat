<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback(Request $request){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser =  User::where('email', $user->getEmail())->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('/pengaduanku');
            }else {
                $newUser = User::create([
                    "nama" =>  $user->getName(),
                    "email" => $user->getEmail(),
                    "foto" => $user->getAvatar(),
                    "is_google_user" => true,
                ]);
                Auth::login($newUser);
                return redirect()->intended('/pengaduanku');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
