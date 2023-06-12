@extends('main')

@section('content')
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Add Slider</h1>
            </div>
<div class="container mx-auto px-4 py-4">    
<form action="/slider-store" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Gambar Slider</label>
    <input type="file" name="slide" class= "form-control">
    <br>
    <label for="">Judul</label>
    <input type="text" name="title" class= "form-control">
    <br>
    <label for="">Deskripsi</label>
    <input type="test" name="deskripsi" class= "form-control">
    <br>
    <input type="hidden" name="status" value="pending" class= "form-control">
    <input type="submit" value="Simpan" class= "btn btn-primary">
</form>
</div>
@endsection