<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class peminjam extends Model
{
    protected $fillable=['barang_id','pinjam_id','user_id','jumlah','tanggal_pinjam','tanggal_kembalian'];
    use HasFactory;

    public function pinjam():BelongsTo
    {
        return $this->belongsTo(pinjam::class);
    }

    public function peminjam():BelongsTo
    {
        return $this->belongsTo(Peminjam::class);
    }
}
