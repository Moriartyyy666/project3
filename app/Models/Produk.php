<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_produk",
        "deskripsi",
        "harga",
        "durasi",
        'foto',
        "kategori_id",
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function harga()
    {
        return $this->hasMany(Harga::class, 'produk_id');
    }
}
