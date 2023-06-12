@extends('main')

@section('content')


<div class="container mx-auto px-4 py-4">
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Product List</h1>
</div>
<a class="btn btn-primary"href="/product-create">+ Add Product</a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Status</th>
      
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
  @forelse ($product as $p)
  <tr>
      <th scope="row">{{$loop->iteration}}.</th>
      <td>{{$p->nama_produk}}</td>
      <td>{{$p->kategori}}</td>
      <td>{{$p->harga}}</td>
      <td>
        <img src="{{asset('gambar/'.$p->gambar)}}" style = "width:50px" alt="">
      </td>
      <td>{{$p->deskripsi}}</td>
      <td>{{$p->status}}</td>
      <td>
        <a href="/product-edit/{{$p->id}}" class="btn btn-warning">Edit</a>
        <a href="/product-delete/{{$p->id}}" class="btn btn-danger">Delete</a>
    </td>
   
    </tr>

    @empty
    <tr>
    <p>Keterangan : Data Produk Tidak Ada</p>
    </tr>

    @endforelse
  </tbody>

</table>

</div>

@endsection