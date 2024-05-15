<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\View\view;
use Illuminate\Http\RedirectResponse;

class PinjamController extends Controller
{
    //
    public function index()
    {
        return view('pinjam.tabel', [
            "title" => "Pinjam",
            "data" => pinjam::all()
        ]);
    }

    public function create():View
    {
     return view('pinjam.tambah')->with(["title" => "Tambah Data pinjam"]);
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

      Pinjam::create($request->all());
      return redirect()->route('pinjam.index')->with('success','Data pinjam
      Berhasil Ditambahkan');
    }


    public function edit(pinjam $pinjam): View
    {
        return view('pinjam.edit', compact('pinjam'))->with
        (["title" => "Ubah Data pinjam"]);
    }



    public function update(Request $request, pinjam $pinjam):RedirectResponse
    {
        $request->validate([
          "nama"=>"required",
          "email"=>"required",
          "hp"=>"required",
          "alamat"=>"nullable",
          "jabatan"=>"nullable",
          ]);

          $pinjam->update($request->all());
      return redirect()->route('pinjam.index')
      ->with('update','Data pinjam Berhasil Diubah');
        }
        
    public function show(pinjam $pinjam):View
    {
     return view('pinjam.tampil',compact('pinjam'))
     ->with(["title" => "Data pinjam"]);
    }
};
