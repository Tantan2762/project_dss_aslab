<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index() {

        $category= Category::all();
        return view ('tugaspert24.category', compact('category'));
    } 
    public function create() {

       
        return view ('tugaspert24.category_create');
    } 
    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required' ,
            'kode' => 'required',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }
        
        $category= Category::create([
            'nama_kategori' => $request -> nama_kategori,
            'kode' => $request -> kode,
        ]);
       
        return redirect ('/category');
    } 

    public function edit($id) {

        $category= Category::where('id', $id)->first();
        
        return view ('tugaspert24.category_edit', compact('category'));
    } 

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required' ,
            'kode' => 'required',
          
        ]);


        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $category= Category::find($request->id)->update([
            'nama_kategori' => $request -> nama_kategori,
            'kode' => $request -> kode,
        ]);
       
        return redirect ('/category');
    } 

    public function delete($id) {

        $category= Category::find($id)->delete();
       
        return redirect ('/category');
    } 
}
