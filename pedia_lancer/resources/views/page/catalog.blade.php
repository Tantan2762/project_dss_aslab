@extends('main')

@section('content')


<div class="container mx-auto px-4 py-4">

    <!-- Catalog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Catalog Product</h1>
            </div>

            <div class="card-tools p-3">
                <form action="/catalog-search" class="form-inline col-3 mx-auto" method="GET">
                    <input type="search" name="search" class="form-control float-right m-1" placeholder="search product by category">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary m-2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="row g-4">
            @forelse ($product as $ct)
            @if ($ct->status == 'accepted')
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('gambar/'.$ct->gambar)}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fas fa-shopping-cart fa-3x"></i>
                            </div>
                            <h4 class="mb-3">{{$ct->nama_produk}}</h4>
                            <h5>{{$ct->kategori}}</h5>
                            <h5>Rp. {{$ct->harga}}</h5>
                            <p>{{$ct->deskripsi}}</p>
                            <a class="small fw-medium" href="">Detail<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endif
                @empty
                <p>Keterangan : Produk Tidak Ada</p>
               

                @endforelse
            </div>
        </div>
    </div>
    <!-- Catalog End -->


</div>

@endsection