<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $table = 'hargas';

    protected $fillable = ['produk_id', 'harga', 'durasi'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
