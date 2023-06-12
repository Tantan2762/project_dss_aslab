<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index (){
        $slider = Slider::all();

        return view ('page.slider', compact('slider'));
    }
    public function index2 (){
        $slider = Slider::all();

        return view ('page.slider_manager', compact('slider'));
    }

    public function create() {
        return view ('page.slider_create');
    }

    public function store(Request $request) {
        $slider = Slider::create($request->all());

        if($request->hasFile('slide')){
            $request->file('slide')->move('slide/', $request->file('slide')->getClientOriginalName());
            $slider->slide = $request->file('slide')->getClientOriginalName();
            $slider->save();
        }

        return redirect ('/slider');
    }

    public function edit ($id){
        $slider = Slider::where('id', $id)->first();
        return view ('page.slider_manager_edit', compact('slider'));
    }

    public function update(Request $request) {
        $slider = Slider::find($request->id)->update($request->all());

        return redirect ('/slider_manager');
    }

    public function delete($id) {
        $slider = Slider::find($id)->delete();

        return redirect ('/slider');
    }
}
