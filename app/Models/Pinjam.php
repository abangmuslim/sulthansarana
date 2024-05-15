<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pinjam extends Model
{
    use HasFactory;
    protected $fillable=['nama','email','hp','alamat','jabatan'];

    public function pinjam():BelongsTo
    {
      return $this->belongsTo(pinjam::class);
    }

    public function peminjaman():HasMany
    {
        return $this->hasMany(pinjam::class);
    }
}
