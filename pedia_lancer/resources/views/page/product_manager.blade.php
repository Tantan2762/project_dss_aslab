@extends('main')

@section('content')


<div class="container mx-auto px-4 py-4">
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">List Of Products To Be Published</h1>
</div>
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
  @forelse ($product as $pm)

  <tr>
      <th scope="row">{{$loop->iteration}}.</th>
      <td>{{$pm->nama_produk}}</td>
      <td>{{$pm->kategori}}</td>
      <td>{{$pm->harga}}</td>
      <td>
        <img src="{{asset('gambar/'.$pm->gambar)}}" style = "width:50px" alt="">
      </td>
      <td>{{$pm->deskripsi}}</td>
      <td>{{$pm->status}}</td>
      <td>
        <a href="/product_manager-edit/{{$pm->id}}" class="btn btn-warning">Change State</a>
        <a href="/product-delete/{{$pm->id}}" class="btn btn-danger">Delete</a>
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