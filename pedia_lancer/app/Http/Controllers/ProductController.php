<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index (){
        $product = Product::all();

        return view ('page.product', compact('product'));
    }

    public function index2 (){
        $product = Product::all();

        return view ('page.product_manager', compact('product'));
    }

    public function index3 (){
        $product = Product::all();

        return view ('page.catalog', compact('product'));
    }

    public function index4 (){
        $product = Product::all();
    
        return view ('page.home', compact('product'));
    }

    public function index5 (){
        $slider = Slider::all();

        return view ('page.home', compact('slider'));
    }

    public function create() {
        return view ('page.product_create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required' ,
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = Product::create($request->all());

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambar/', $request->file('gambar')->getClientOriginalName());
            $product->gambar = $request->file('gambar')->getClientOriginalName();
            $product->save();
        }

        return redirect ('/product');
    }

    public function edit ($id){
        $product = Product::where('id', $id)->first();
        return view ('page.product_edit', compact('product'));
    }

    public function edit2 ($id){
        $product = Product::where('id', $id)->first();
        return view ('page.product_manager_edit', compact('product'));
    }

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required' ,
            'kategori' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = Product::find($request->id)->update($request->all());

        return redirect ('/product');
    }

    public function update2(Request $request) {
        $product = Product::find($request->id)->update([
            'status' => $request->status,
        ]);

        return redirect ('/product_manager');
    }

    public function delete($id) {
        $product = Product::find($id)->delete();

        return redirect ('/product');
    }

    public function search(Request $request) {
        if($request->has('search')){
            $product = Product::where('kategori', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $product = Product::all();
        }


        return view ('page.catalog', ['product'=>$product]);
    }
}
