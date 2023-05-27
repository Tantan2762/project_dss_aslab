<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dproduk;

class DprodukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dproduk::create([
            'nama_produk' => 'Lampu Neon',
            'kategori' => 'AE',
            'harga' => 70000,   
       ]);
        Dproduk::create([
                'nama_produk' => 'Mobil Avanza',
                'kategori' => 'K',
                'harga' => 70000000,   
        ]);
        Dproduk::create([
            'nama_produk' => 'Baju Muslim',
            'kategori' => 'F',
            'harga' => 700000,   
        ]);
    }
}
