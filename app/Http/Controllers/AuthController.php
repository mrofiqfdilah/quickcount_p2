<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function halaman_daftar()
    {
        return view('auth.halaman_daftar');
    }

    public function halaman_masuk()
    {
        return view('auth.halaman_masuk');
    }

    public function register(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'nik' => 'required',
        'jenis_kelamin' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 'user';
        $user->save();

        return redirect()->route('halaman_masuk');
    }

    public function login(Request $request)
    {
        $hanya = $request->only('email','password');

        if(Auth::attempt($hanya)){
            $user = Auth::user();

            if($user->role == 'user'){
                return redirect()->route('home');
            }else if ($user->role == 'admin'){ 
                return redirect()->route('datauser.index');
            }
        }
        
        
    }
}
