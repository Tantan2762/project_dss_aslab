<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'slide' => 'one.img',
            'title' => 'Judul Website',
            'deskripsi' => 'Deskripsi Slider Website',
            'status' => 'pending',
        ]);
        Slider::create([
            'slide' => 'two.img',
            'title' => 'Judul Website 2',
            'deskripsi' => 'Deskripsi Slider Website 2',
            'status' => 'pending',
        ]);
    }
}
