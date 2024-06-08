<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pinjam extends Model
{
    use HasFactory;
    protected $fillable=['peminjam_id','user_id','barang_id','jumlah','tanggal_peminjam','tanggal_kembalian','kondisi','keterangan'];

    public function peminjam():BelongsTo
    {
      return $this->BelongsTo(Peminjam::class);
    }

    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function barang():BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
}


