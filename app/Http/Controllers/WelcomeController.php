<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjam;
use App\Models\Pinjam;
use App\Models\User;


class WelcomeController extends Controller
{
    public function welcome()
    {
        $pinjam = Pinjam::count();
        $barang = Barang::count();
        $peminjam = Peminjam::count();
        $user = User::count();

        $tanggal_awal = date('Y-m-01');
        $tanggal_akhir = date('Y-m-d');

        $data_tanggal = array();
        $data_pendapatan = array();

        while (strtotime($tanggal_awal) <= strtotime($tanggal_akhir)) {
            $data_tanggal[] = (int) substr($tanggal_awal, 8, 2);

         

            $tanggal_awal = date('Y-m-d', strtotime("+1 day", strtotime($tanggal_awal)));
        }

        return view('welcome',[
            "pinjam"=>$pinjam,
            "barang"=> $barang,
            "peminjam"=>$peminjam,
            "user"=> $user,
            "title"=>"welcome"
        ]);
        
    }

    
}

