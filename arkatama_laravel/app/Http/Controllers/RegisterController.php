<?php

namespace App\Http\Controllers;

use App\Models\Userr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {

        return view ('tugaspert25.register');
    }

    public function store(Request $request) {
        
        $userr= Userr::create([
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'role' => $request -> role,
            
        ]);
       
        return redirect ('/lending')->with('success', 'Akun Berhasil Dibuat');
    } 
}
