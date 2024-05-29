<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\View\view;
use Illuminate\Http\RedirectResponse;

class peminjamanController extends Controller
{
    //
    public function index()
    {
        return view('peminjaman.index', [
            "title" => "peminjaman",
            "data" => Peminjaman::all()
        ]);
    }

    public function create():View
    {
     return view('peminjaman.create')->with(["title" => "Tambah Data peminjaman"]);
    }

    public function store(Request $request): RedirectResponse
    {
      $request->validate([
        "jumlah"=>"required",
        "tanggal_pinjam"=>"required",
        "tanggal_kembalian"=>"required",
        "kondisi"=>"required",
      ]);

      Peminjaman::create($request->all());
      return redirect()->route('peminjaman.index')->with('success','Data peminjaman
      Berhasil Ditambahkan');
    }

    public function edit(peminjaman $peminjaman): View
    {
        return view('peminjaman.edit', compact('peminjaman'))->with
        (["title" => "Ubah Data peminjaman"]);
    }


    public function update(Request $request, peminjaman $peminjaman):RedirectResponse
    {
        $request->validate([
          "jumlah"=>"required",
        "tanggal_pinjam"=>"required",
        "tanggal_kembalian"=>"required",
        "kondisi"=>"required",
          ]);

          $peminjaman->update($request->all());
      return redirect()->route('peminjaman.index')
      ->with('update','Data peminjaman Berhasil Diubah');
        }
        
    public function show(Peminjaman $peminjaman):View
    {
     return view('peminjaman.tampil',compact('peminjaman'))
     ->with(["title" => "Data peminjaman"]);
    }
};


