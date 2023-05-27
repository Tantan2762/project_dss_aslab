<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dproduk extends Model
{
    use HasFactory;
    protected $table = 'dproduk';
    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga'
    ];
}
