<?php

namespace App\Http\Controllers;
use App\Barang;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamanController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        $barang = Barang::count();
        $user = User::count();
        return view('dashboard', [
            'barang' => $barang,
            'user' => $user
            ]);
    }
    public function ceklogin(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Email atau Password anda salah!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with('error', 'Anda berhasil logout!');
    }
}
