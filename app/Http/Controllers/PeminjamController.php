<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;
use Illuminate\View\view;
use Illuminate\Http\RedirectResponse;

class peminjamController extends Controller
{
    //
    public function index()
    {
        return view('peminjam.index', [
            "title" => "peminjam",
            "data" => peminjam::all()
        ]);
    }

    public function create():View
    {
     return view('peminjam.create')->with(["title" => "Tambah Data peminjam"]);
    }


    public function store(Request $request): RedirectResponse
    {
      $request->validate([
        "jumlah"=>"required",
        "tanggal_pinjam"=>"required",
        "tanggal_kembalian"=>"required",
        "kondisi"=>"required",
      ]);

      peminjam::create($request->all());
      return redirect()->route('peminjam.index')->with('success','Data peminjam
      Berhasil Ditambahkan');
    }


    public function edit(peminjam $peminjam): View
    {
        return view('peminjam.edit', compact('peminjam'))->with
        (["title" => "Ubah Data peminjam"]);
    }



    public function update(Request $request, peminjam $peminjam):RedirectResponse
    {
        $request->validate([
          "jumlah"=>"required",
        "tanggal_pinjam"=>"required",
        "tanggal_kembalian"=>"required",
        "kondisi"=>"required",
          ]);

          $peminjam->update($request->all());
      return redirect()->route('peminjam.index')
      ->with('update','Data peminjam Berhasil Diubah');
        }
        
    public function show(Peminjam $peminjam):View
    {
     return view('peminjam.tampil',compact('peminjam'))
     ->with(["title" => "Data peminjam"]);
    }
};
