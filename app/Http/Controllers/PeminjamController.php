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
        return view('peminjam.tabel', [
            "title" => "peminjam",
            "data" => peminjam::all()
        ]);
    }

    public function create():View
    {
     return view('peminjam.tambah')->with(["title" => "Tambah Data peminjam"]);
    }


    public function store(Request $request): RedirectResponse
    {
      $request->validate([
        "nama"=>"required",
        "email"=>"required",
        "hp"=>"required",
        "alamat"=>"nullable",
        "jabatan"=>"nullable",
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
          "nama"=>"required",
          "email"=>"required",
          "hp"=>"required",
          "alamat"=>"nullable",
          "jabatan"=>"nullable",
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
