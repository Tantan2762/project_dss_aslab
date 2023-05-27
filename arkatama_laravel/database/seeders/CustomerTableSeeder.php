<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        // Customer::create([
        //     'nama' => 'Agus Budi',
        //     'email'=> 'agus@gmail.com',
        //     'alamat'=> 'Surabaya',
        // ]);
        // Customer::create([
        //     'nama' => 'John Doe',
        //     'email'=> 'john@gmail.com',
        //     'alamat'=> 'Jakarta',
        // ]);

        Customer::factory()->count(10)->create();
    }
}
