<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function tambah()
    {
        return view('addbarang');
    }
    public function insert(Request $res)
    {
        Barang::create([
            "nama_barang" => $res->nama_barang,
            "satuan" => $res->satuan,
            "jumlah" => $res->jumlah,
            "keterangan" => $res->keterangan,
            "lokasi" => $res->lokasi
        ]);

        return redirect('/barang')->with('succes', 'Data berhasil ditambahkan');
    }

    public function index()
    {
        $barang = Barang::all();

        return view('barang', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findorFail($id);

        return view('editbarang', compact('barang'));
    }

    public function update(Request $res)
    {
        $barang = Barang::findorFail($res->id);

        $barang->nama_barang = $res->nama_barang;
        $barang->satuan =  $res->satuan;

        $barang->jumlah =  $res->jumlah;
        $barang->keterangan =  $res->keterangan;
        $barang->lokasi =  $res->lokasi;
        $barang->save();

        return redirect('/barang')->with('succes', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        Barang::destroy($id);

        return redirect('/barang')->with('succes', 'Data berhasil dihapus');
    }
}
