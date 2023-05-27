<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Category::create([
            'nama_kategori' => 'Alat Elektronik',
            'Kode' => 'AE',   
       ]);

       Category::create([
        'nama_kategori' => 'Kendaraan',
        'Kode' => 'K',   
   ]);

   
    Category::create([
        'nama_kategori' => 'Fashion',
        'Kode' => 'F',   
    ]);

    Category::create([
        'nama_kategori' => 'Alat Tulis Kantor',
        'Kode' => 'ATK',   
    ]);

    Category::create([
        'nama_kategori' => 'Kebutuhan Pokok',
        'Kode' => 'KBP',   
    ]);
    }
}
