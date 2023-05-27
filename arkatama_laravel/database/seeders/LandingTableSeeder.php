<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Landing;

class LandingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Landing::create([
            'nama' => 'Tantan',
            'deskripsi' => 'Ini dari Database. Tantan Nugraha Seorang Mahaisiswa Multimedia Komputasi Universitas Pendidikan Indonesia yang sedang Mengikuti Program Studi Independen di PT. Arkatama Multi Solusindo Path Fullstack Web Development. Doakan Semoga Lancar Menyelesaikan Program Ini.',   
        ]);
    }
}
