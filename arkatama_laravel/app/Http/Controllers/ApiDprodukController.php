<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dproduk;
use Illuminate\Support\Facades\Validator;

class ApiDprodukController extends Controller
{
    public function index() {

        $dproduk= Dproduk::get();
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil diambil',
            'data' => $dproduk,

        ]);
    }

    public function store(Request $request) {

        
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|min:3' ,
            'kategori' => 'required',
            'harga' => 'required|integer',
        ]);


        if($validator->fails()){
            return response()->withErrors($validator);
        }

        $dproduk= Dproduk::create([
            'nama_produk' => $request -> nama_produk,
            'kategori' => $request -> kategori,
            'harga' => $request -> harga,
        ]);
       
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil disimpan',
            'data' => $dproduk,

        ]);
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
       
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil diedit',
            'data' => $dproduk,

        ]);
    } 

    public function delete($id) {

        $dproduk= Dproduk::find($id)->delete();
       
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil dihapus pada id ke '.$id,
            'data' => $dproduk,

        ]);
    } 
}
