<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\pelanggan;
use App\Models\transaksi;

class BarangController extends Controller
{
    public function index(){
        $transaksi = transaksi::all();
        return view('transaksi0163', [
            'transaksi' => $transaksi
        ]);
    }

    public function search(Request $request){
        $barang = Barang::where('id_pelanggan', $request->cari);
        $transaksi = Transaksi::where('id_pelanggan', $request->cari)->get();
        return view('transaksi0163', [
            'barang' => $barang,
            'transaksi' => $transaksi
        ]);
    }

    public function tambah(){
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('tambah-transaksi0163',[
            'barang' => $barang,
            'pelanggan' => $pelanggan
        ]);
    }

    public function store(Request $request){
        Transaksi::create([
            'id_pelanggan'=>$request->id_pelanggan,
            'id_barang'=>$request->id_barang
        ]);
        return redirect()->route('transaksi');
    }

    public function edit($id){
        $barang = barang::all();
        $pelanggan = pelanggan::all();
        $transaksi = transaksi::where('id', $id)->get();
        return view('edit-transaksi0163',[
            'barang' => $barang,
            'pelanggan' => $pelanggan,
            'transaksi' => $transaksi,
            'indeks' => $id
        ]);
    }

    public function update(Request $request, $id){
        transaksi::where('id', $id)->update([
            'id_pelanggan'=>$request->id_pelanggan,
            'id_barang'=>$request->id_barang
        ]);
        return redirect()->route('transaksi');
    }

    public function destroy($id)
    {
        $transaksi = transaksi::where('id', $id)->first();
        $transaksi->delete();

        return redirect()->route('transaksi');
    }
}