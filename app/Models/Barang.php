<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
  use HasFactory;
  protected $fillable = ['nama_barang', 'jenis_barang', 'stok_barang', 'tanggalpembelian', 'lokasi_barang', 'kondisi'];

  

  public function peminjaman(): HasMany
  {
    return $this->hasMany(pinjam::class);
  }
}
