@extends('main')

@section('content')


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1000</h1>
                    </div>
                    <h5 class="mb-3">Happy Customers</h5>
                    <span>Pelanggan sangat puas memakai layanan dari para freelancer kami</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">100</h1>
                    </div>
                    <h5 class="mb-3">Project Done</h5>
                    <span>Terdapat 100 lebih project yang sudah diselesaikan para freelancer kami</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">5</h1>
                    </div>
                    <h5 class="mb-3">Awards Win</h5>
                    <span>Kami mendapatkan penghargaan dari berbagai pihak sebagai sebuah bentuk apresiasi</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">40</h1>
                    </div>
                    <h5 class="mb-3">Expert Workers</h5>
                    <span>Freelancer kami merupakan tim terpercaya dengan pengalaman yang sangat mumpuni</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->
    

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


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">About</h6>
                <h1 class="mb-4">Developer</h1>
            </div>
            <div class="row g-4 ">
      
                <div class="col-lg-4 col-md-6 wow fadeInUp mx-auto" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="">
                            <img class="img-fluid w-75" src="{{('vendor/assets/img/ss.png')}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="https://github.com/Tantan2762"><i class="fab fa-github"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="https://www.linkedin.com/in/tantan-nugraha-5310081ba/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="https://instagram.com/tantan2762?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Tantan Nugraha</h5>
                            <h6>Fullstack Developer</h6>
                            <h7>Multimedia Computing</h7><br>
                            <h7>Universitas Pendidikan Indonesia</h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection