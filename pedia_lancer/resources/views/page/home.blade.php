@extends('main')

@section('content')

     <!-- Carousel Start -->
     <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
        @forelse ($slider as $s)
        @if ($s->status == 'accepted')
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('slide/'.$s->slide)}}'>">
                <img class="img-fluid" src="{{asset('slide/'.$s->slide)}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">{{$s->title}}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">{{$s->deskripsi}}</p>
                                <a href="{{url('catalog')}}" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif   
        @empty
        @endforelse
        </div>
    </div>

      <!-- Carousel End-->
    
          <!-- About Start -->
            <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
                <div class="container about px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="{{ ('vendor/assets/img/about2.jpg') }}" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                            <div class="p-lg-5 pe-lg-0">
                                <h6 class="text-primary">About Us</h6>
                                <h1 class="mb-4">2+ Berpengalaman dalam bidang freelancer</h1>
                                <p>Banyak project freelancer yang sudah kami kerjakan, diantaranya</p>
                                <p><i class="fa fa-check-circle text-primary me-3"></i>Freelancer bidang Teknologi dan Desain</p>
                                <p><i class="fa fa-check-circle text-primary me-3"></i>Freelancer bidang Makanan</p>
                                <p><i class="fa fa-check-circle text-primary me-3"></i>Freelance bidang Fashion dan Aksesoris</p>
                                <a href="{{url('catalog')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

@endsection