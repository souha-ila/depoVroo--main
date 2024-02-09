@extends('layouts.app')

@section('content')
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// VROOM VROOM//</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Find the perfect car for your adventures</h1>
                                    <a href="{{ route('car.index') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Discover our offers<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="../img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// VROOM VROOM //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">travel in style, rent from us!</h1>
                                    <a href="{{ route('car.index') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Discover our offers<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
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


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">10 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">Experience</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-4"><span class="text-primary">VROOM</span> Your Ultimate Destination for Car Rentals!</h1>
                <p class="mb-4">Vroom is your ultimate solution for all your car rental needs. We pride ourselves on providing top-notch auto care services that you can trust. Our mission is to ensure that every customer receives professional and expert service, combined with the highest level of quality.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Competitive Rates</h6>
                                <span>We strive to provide affordable pricing without compromising on the quality</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Quality Servicing </h6>
                                <span>Customer satisfaction is our utmost priority</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>practical booking</h6>
                                <span>With VROOM, booking a car has never been easier or more hassle-free.</span>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Available Cars</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Services //</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>
                        <h4 class="m-0">Expert Guidance </h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0">Insurance Coverage</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-phone-alt fa-2x me-3"></i>
                        <h4 class="m-0">24/24 Roadside Assistance</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="fa fa-cog fa-2x me-3"></i>
                        <h4 class="m-0">Flexible Rental Options</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Our knowledgeable staff is dedicated to providing you with exceptional customer service. </h3>
                                <p class="mb-4">We're here to answer all your questions, provide recommendations, and ensure that you have all the information you need for a smooth and enjoyable rental experience</p>
                                <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Rest easy knowing that you're covered against unforeseen circumstances</h3>
                                <p class="mb-4">We offer comprehensive insurance coverage options to provide you with added protection and confidence during your rental period.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Your safety and peace of mind are our top priorities.</h3>
                                <p class="mb-4">  In case of any unexpected situations, our 24/7 roadside assistance team is ready to assist you promptly and efficiently.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">We understand that your rental needs may vary. </h3>
                                <p class="mb-4">That's why we offer flexible rental durations, including daily, weekly, and monthly options. Whether you need a car for a quick getaway or an extended trip, we've got you covered.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->




<!-- cars Start -->
<style>
    .car-image {
        height: 200px; /* Adjust the height as needed */
        object-fit: cover;
    }
</style>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Cars //</h6>
            <h1 class="mb-5">Discover Our Models</h1>
        </div>
        <div class="row g-4">
            @foreach ($viewData["cars"] as $car)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ asset('/storage/'.$car->getImage()) }}" class="card-img-top img-card car-image">
                    </div>
                    <div class="bg-light p-4">
                        <small><p class="card-text">{{$car["price"] }}$</p></small>
                        <h5 class="fw-bold mb-0">{{ $car["name"] }}</h5>
                        <h6 class="card-text">{{$car["model"] }}</h6>
                        <small>
                            <a href="{{ route('car.show', ['id'=> $car["id"]]) }}">Show More</a>
                            <i class="fa fa-arrow-right text-primary flex-shrink-0"></i>
                        </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <a class="btn w-100 py-5" href="{{ route('car.index') }}">
                <u style="color: rgb(98, 95, 95);">Discover More <i class="fa fa-arrow-right flex-shrink-0"></i></u>
            </a>
        </div>
    </div>
</div>

<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/adnane.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0"> Adnane</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">VROOOM  provided me with excellent service from start to finish. The booking process was seamless, and the staff was friendly and helpful.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/nouhaila.png" style="width: 80px; height: 80px;">
                <h5 class="mb-0"> Nouhaila</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">I have been using  VROOM for all my car rental needs, and they never disappoint.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/souhaila.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">souhaila</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">I can't say enough good things about Vroom. Their customer service is exceptional, and their fleet offers a wide range of options to suit any preference.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/souhaila.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">souhaila</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">I can't say enough good things about Vroom. Their customer service is exceptional, and their fleet offers a wide range of options to suit any preference.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection