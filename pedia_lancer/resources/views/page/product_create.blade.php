@extends('main')

@section('content')
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">+ Add Product</h1>
            </div>
<div class="container mx-auto px-4 py-4">    
<form action="/product-store" method="post" enctype="multipart/form-data">
    @csrf
    
    @if ($errors->any())
              <div class="alert alert-primary mb-3 m-auto" style="width: 32rem;" role="alert">
                <ul>
                  @foreach ($errors->all() as $e)
                    <li>
                      {{$e}}
                    </li>
                  @endforeach
                </ul>
              </div>
    @endif

    
    <label for="">Nama Produk</label>
    <input type="text" name="nama_produk" class= "form-control">
    <br>
    <label for="">Kategori</label>
    <input type="text" name="kategori" class= "form-control">
    <br>
    <label for="">Harga</label>
    <input type="number" name="harga" class= "form-control">
    <br>
    <label for="">Masukkan Gambar</label>
    <input type="file" name="gambar" class= "form-control">
    <br>
    <label for="">Deskripsi</label>
    <input type="text" name="deskripsi" class= "form-control">
    <br>
    <input type="hidden" name="status" class= "form-control" value = "pending">
    <input type="submit" value="Simpan" class= "btn btn-primary">
</form>
</div>
@endsection