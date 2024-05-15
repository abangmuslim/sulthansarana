<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Barang;
use Illuminate\View\View;
use App\Models\Category;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barang=Barang::all();
        return view('barang.index',[
            "title" => "barang",
            "data" => $barang
        ]);
    }

    public function create():View
    {
     return view('barang.create')->with([
        "title" => "Tambah Data barang",
    ]);
    }

    public function store(Request $request):RedirectResponse
    {
      $request->validate([
        "nama_barang"=>"required",
        "jenis_barang"=>"required",
        "stok_barang"=>"required",
        "tanggalpembelian"=>"required",
        "lokasi_barang"=>"required",
        "kondisi"=>"required",
      ]);

      Barang::create($request->all());
      return redirect()->route('barang.index')->with('success','Data Pinjam
      Berhasil Ditambahkan');
    }

    public function edit(barang $barang):View
    {
     return view('barang.edit',compact('barang'))->with([
        "title" => "Ubah Data barang",
        "data" =>barang::all()
    ]);
    }

    public function update(barang $barang, Request $request):RedirectResponse
    {
        $request->validate([
        "nama_barang"=>"required",
        "jenis_barang"=>"required",
        "stok_barang"=>"required",
        "tanggalpembelian"=>"required",
        "lokasi_barang"=>"required",
        "kondisi"=>"required",
          ]);

          $barang->update($request->all());
      return redirect()->route('barang.index')
      ->with('update','Data barang Berhasil Diubah');
        }

        public function show():View
    {
        $barang=barang::all();
        return view('barang.show')->with([
            "title" => "Tampil Data barang",
            "data" => $barang
        ]);
    }

    public function destroy($id):RedirectResponse
    {
        Barang::where('id',$id)->delete();
        return redirect()->route('barang.index')->with('deleted','Data barang
        Berhasil Dihapus');
}
}