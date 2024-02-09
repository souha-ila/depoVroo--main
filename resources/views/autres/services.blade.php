@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                   
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Quality Servicing</h5>
                        <p>The satisfaction of our customers is our top priority. We are committed to providing exceptional quality service to every customer. Our dedicated team is available to answer all your questions and assist you throughout the rental process.</p>
                        <a class="text-secondary border-bottom" href="">Discover our offers</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-credit-card fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Competitive Rates</h5>
                        <p>we understand the importance of offering affordable rates without compromising on quality. We offer you competitive prices for our car rentals, with flexible options to suit your budget and the duration of your rental.</p>
                        <a class="text-secondary border-bottom" href="">Discover our offers</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-handshake fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Simple and practical booking</h5>
                        <p>We made the booking process quick and easy. Our user-friendly site allows you to select the type of vehicle you want in just a few clicks.our customer service team is available to guide you through the booking process.</p>
                        <a class="text-secondary border-bottom" href="">Discover our offers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection