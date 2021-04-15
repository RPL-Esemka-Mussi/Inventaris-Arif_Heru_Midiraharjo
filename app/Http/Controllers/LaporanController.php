<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\User;

class LaporanController extends Controller
{
     public function index()
    {
        $barang = Barang::all();
        $users = User::all();
        return view('laporan', compact('barang'), compact('users'));
    }

    
    public function print()
    {
        $barang = Barang::all();
        $users = User::all();
        return view('print', compact('barang'), compact('users'));
    }
}
