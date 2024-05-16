<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Peminjam extends Model
{
    protected $fillable=['jumlah','tanggal_pinjam','tanggal_kembalian','kondisi'];
    use HasFactory;

    public function peminjaman(): BelongsTo
    {
      return $this->belongsTo(pinjam::class);
    }
}
