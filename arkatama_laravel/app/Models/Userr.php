<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;

    protected $table = 'userr';
    protected $fillable = [
        'email',
        'password',
        'role',
    ];
    
}
