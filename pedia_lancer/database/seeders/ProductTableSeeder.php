<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama_produk' => 'Jasa Desain',
            'kategori' => 'Desain',
            'harga' => 40000,
            'gambar' => 'satu.png',
            'deskripsi' => 'Menyediakan Jasa desain branding produk',
            'status' => 'Pending',

        ]);

        Product::create([
            'nama_produk' => 'Jasa Desain',
            'kategori' => 'Desain',
            'harga' => 40000,
            'gambar' => 'satu.png',
            'deskripsi' => 'Menyediakan Jasa desain branding produk',
            'status' => 'Pending',

        ]);

        Product::create([
            'nama_produk' => 'Jasa Desain',
            'kategori' => 'Desain',
            'harga' => 40000,
            'gambar' => 'satu.png',
            'deskripsi' => 'Menyediakan Jasa desain branding produk',
            'status' => 'Pending',

        ]);

        Product::create([
            'nama_produk' => 'Jasa Desain',
            'kategori' => 'Desain',
            'harga' => 40000,
            'gambar' => 'satu.png',
            'deskripsi' => 'Menyediakan Jasa desain branding produk',
            'status' => 'Pending',

        ]);
        Product::create([
            'nama_produk' => 'Jasa Desain',
            'kategori' => 'Desain',
            'harga' => 40000,
            'gambar' => 'satu.png',
            'deskripsi' => 'Menyediakan Jasa desain branding produk',
            'status' => 'Pending',

        ]);

        Product::create([
            'nama_produk' => 'Jasa Desain',
            'kategori' => 'Desain',
            'harga' => 40000,
            'gambar' => 'satu.png',
            'deskripsi' => 'Menyediakan Jasa desain branding produk',
            'status' => 'Pending',

        ]);
    }
}
