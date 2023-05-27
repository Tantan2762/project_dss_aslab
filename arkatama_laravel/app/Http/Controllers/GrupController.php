<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grup;

class GrupController extends Controller
{
    public function index() {

        $grup= Grup::all();
        return view ('tugaspert24.grup', compact('grup'));
    } 

    public function create() {
        
        return view ('tugaspert24.grup_create');
    } 

    public function store(Request $request) {
        
        $grup= Grup::create([
            'nama_pengguna' => $request -> nama_pengguna,
            'status' => $request -> status,
            
        ]);
       
        return redirect ('/grup');
    } 

    public function edit($id) {

        $grup= Grup::where('id', $id)->first();
        
        return view ('tugaspert24.grup_edit', compact('grup'));
    } 

    public function update(Request $request) {

        $grup= Grup::find($request->id)->update([
            'nama_pengguna' => $request -> nama_pengguna,
            'status' => $request -> status,
        ]);
       
        return redirect ('/grup');
    } 

    public function delete($id) {

        $grup= Grup::find($id)->delete();
       
        return redirect ('/grup');
    } 
}
