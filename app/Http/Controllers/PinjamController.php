<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Models\Barang;
use App\Models\User;
use App\Models\Peminjam;
use Illuminate\Http\RedirectResponse;

class pinjamController extends Controller
{
    //

    public function index()
    {
        return view('pinjam.index', [
            "title"     => "pinjam",
            "data"      => Pinjam::all(),
            "barang"    => Barang::all(),
            "user"      => User::all(),
            "peminjam"  => Peminjam::all()
        ]);
    }

    public function create():View
    {
     return view('pinjam.create')->with([
            "title"     => "Tambah Data pinjam",
            "data"      => Pinjam::all(),
            "barang"    => Barang::all(),
            "user"      => User::all(),
            "peminjam"  => Peminjam::all()

    ]);
    }

    public function store(Request $request): RedirectResponse
    {
      $request->validate([
        "peminjam_id"=>"required",
        "barang_id"=>"required",
        "user_id"=>"required",
        "jumlah"=>"required",
        "tanggal_peminjam"=>"required",
        "tanggal_kembalian"=>"required",
        "kondisi"=>"required",
        "keterangan"=>"required",
      ]);

      Pinjam::create($request->all());
      return redirect()->route('pinjam.index')->with('success','Data pinjam
      Berhasil Ditambahkan');
    }

    public function edit(pinjam $pinjam): View
    {
        return view('pinjam.edit', compact('pinjam'))->with([
          "title" => "Ubah Data pinjam",
          "barang"=> Barang::all(),
            "peminjam"=> Peminjam::all()
        ]);
    }

    public function update(Request $request, pinjam $pinjam):RedirectResponse
    {
        $request->validate([
        "peminjam_id"=>"required",
        "barang_id"=>"required",
        "user_id"=>"required",
        "jumlah"=>"required",
        "tanggal_peminjam"=>"required",
        "tanggal_kembalian"=>"required",
        "kondisi"=>"required",
        "keterangan"=>"required",
          ]);

          $pinjam->update($request->all());
      return redirect()->route('pinjam.index')
      ->with('update','Data pinjam Berhasil Diubah');
        }
        
    public function show(Pinjam $pinjam):View
    {
     return view('pinjam.tampil',compact('pinjam'))
     ->with(["title" => "Data pinjam"]);
    }
};



