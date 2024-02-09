@extends('layouts.app')

@section('content')
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
                        <div class="image-wrapper">
                            <img src="{{ asset('/storage/'.$car->getImage()) }}" class="card-img-top img-card">
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <small><p class="card-text ">{{$car->getPrice()}}$</p></small>
                        <h5 class="fw-bold mb-0">{{ $car->getName() }}</h5>
                        <h6 class="card-text ">{{$car->getModel() }}</h6>
                        <small>
                            <a href="{{ route('car.show', ['id'=> $car->getId()]) }}">show More</a>
                            <i class="fa fa-arrow-right  text-primary flex-shrink-0"></i>
                        </small>
                        @if (!$car->isAvailable(now(), now()->addDays(7)))
                            <p>This car is not available for the specified dates.</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<style>

.team-item {
    height: 100%;
}

.image-wrapper {
    height: 200px; /* Adjust the height as needed */
    overflow: hidden;
}

.img-card {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

    </style>
@endsection
