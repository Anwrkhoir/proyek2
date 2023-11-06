<?php

namespace Database\Seeders;

use App\Models\Kategori;
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
        $kategori1= Kategori::create([
            'name' => 'makanan'
        ]);

        $kategori2= Kategori::create([
            'name' => 'minuman'
        ]);

        Produk::create([
            'nama_produk' => 'ayam geprek',
            'harga' => 12000,
            'kategori_id' => 1,
            'detail' => 'keren', 
        ]);
    }
}
