<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index() {

        $pengguna= Pengguna::all();
        return view ('tugaspert24.pengguna', compact('pengguna'));
    } 

    public function create() {
        
        return view ('tugaspert24.pengguna_create');
    } 

    public function store(Request $request) {
        
        $pengguna= Pengguna::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            
        ]);
       
        return redirect ('/pengguna');
    } 

    public function edit($id) {

        $pengguna= Pengguna::where('id', $id)->first();
        
        return view ('tugaspert24.pengguna_edit', compact('pengguna'));
    }

    public function update(Request $request) {

        $pengguna= Pengguna::find($request->id)->update([
            'nama' => $request -> nama,
            'email' => $request -> email,
        ]);
       
        return redirect ('/pengguna');
    } 

    public function delete($id) {

        $pengguna= Pengguna::find($id)->delete();
       
        return redirect ('/pengguna');
    } 
}

