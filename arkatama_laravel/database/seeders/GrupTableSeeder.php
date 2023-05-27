<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grup;

class GrupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grup::create([
            'nama_pengguna' => 'Asna',
            'status' => 'Admin',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Gusti',
            'status' => 'Staff',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Jeje',
            'status' => 'Staff',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Gustav',
            'status' => 'Staff',   
        ]);
    }
}
