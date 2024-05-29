<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable=['peminjam_id','user_id','barang_id','jumlah','tanggal_peminjam','tanggal_kembalian','kondisi'];

}
