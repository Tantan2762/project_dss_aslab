<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dproduk;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class DprodukController extends Controller
{
    public function index() {

        $dproduk= Dproduk::all();
        return view ('tugaspert24.dproduk', compact('dproduk'));
    } 

    public function index2() {

        $dproduk= Dproduk::all();
        return view ('tugaspert25.lending', compact('dproduk'));
    } 

    public function create() {
        
        return view ('tugaspert24.dproduk_create');
    } 

    public function store(Request $request) {

        
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|min:3' ,
            'kategori' => 'required',
            'harga' => 'required|integer',
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $dproduk= Dproduk::create([
            'nama_produk' => $request -> nama_produk,
            'kategori' => $request -> kategori,
            'harga' => $request -> harga,
        ]);
       
        return redirect ('/dproduk');
    } 

    public function edit($id) {

        $dproduk= Dproduk::where('id', $id)->first();
        
        return view ('tugaspert24.dproduk_edit', compact('dproduk'));
    } 

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|min:3' ,
            'kategori' => 'required',
            'harga' => 'required|integer',
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $dproduk= Dproduk::find($request->id)->update([
            'nama_produk' => $request -> nama_produk,
            'kategori' => $request -> kategori,
            'harga' => $request -> harga,
        ]);
       
        return redirect ('/dproduk');
    } 

    public function delete($id) {

        $dproduk= Dproduk::find($id)->delete();
       
        return redirect ('/dproduk');
    } 
}
