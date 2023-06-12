@extends('main')

@section('content')


<div class="container mx-auto px-4 py-4">
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Slider</h1>
</div>
<a class="btn btn-primary"href="/slider-create">+ Add Slider</a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar Slider</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th> 
      <th scope="col">Status</th>      
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
  @forelse ($slider as $s)
  <tr>
      <th scope="row">{{$loop->iteration}}.</th>
      <td>
      <img src="{{asset('slide/'.$s->slide)}}" style = "width:70px" alt="">
      </td>
      <td>{{$s->title}}</td>
      <td>{{$s->deskripsi}}</td>
      <td>{{$s->status}}</td>
      <td>
        <a href="/slider-delete/{{$s->id}}" class="btn btn-danger">Delete</a>
    </td>
   
    </tr>

    @empty
    <tr>
    <p>Keterangan : Data Slider Tidak Ada</p>
    </tr>

    @endforelse
  </tbody>

</table>

</div>

@endsection