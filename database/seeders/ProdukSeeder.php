<?php

namespace Database\Seeders;

use App\Models\Harga;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Netflix',
            'foto' => 'img/netflixlogo.png',
            'deskripsi' => 'netflix',
            'kategori_id' => 1,
        ]);

        Harga::create([
            'produk_id' => 1,
            'harga' => 25000,
            'durasi' => '1 bulan'
        ]);
    }
}
