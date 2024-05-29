<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peminjam extends Model
{
    use HasFactory;
    protected $fillable=['nama_peminjam','email','phone','address','jabatan'];

    public function peminjam():BelongsTo
    {
      return $this->belongsTo(peminjam::class);
    }

    public function peminjaman():HasMany
    {
        return $this->hasMany(peminjam::class);
    }
}
