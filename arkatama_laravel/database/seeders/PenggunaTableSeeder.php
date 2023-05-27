<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'nama' => 'Gusti',
            'email' => 'gustia@gmail.com',   
        ]);
        Pengguna::create([
            'nama' => 'Asna',
            'email' => 'asna@gmail.com',   
        ]);
        Pengguna::create([
            'nama' => 'Jeje',
            'email' => 'jeje@gmail.com',   
        ]);
        Pengguna::create([
            'nama' => 'Gustav',
            'email' => 'gustav@gmail.com',   
        ]);
    }
}
