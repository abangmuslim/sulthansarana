<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Pinjam::count();
        if ($request->filled('q')) {
            $query = $query->where('id', 'LIKE', '%' . $request->q . '%');
        }
        if ($request->filled('tanggal_mulai')) {
            $query = $query->where('created_at', '>=', $request->tanggal_mulai);
        }
        if ($request->filled('tanggal_selesai')) {
            $query = $query->where('created_at', '<=', $request->tanggal_selesai);
        }

    
        $pinjam = Pinjam::All();
        $jumlahbarang = Pinjam::sum('jumlah');
        $title = "Laporan barang";
        
        if ($request->page == 'laporan') {
            return view('laporan.laporan', compact('pinjam', 'jumlahbarang', 'title'));
        }

        return view('laporan.laporan', compact('pinjam', 'jumlahbarang', 'title'));
    }
}
