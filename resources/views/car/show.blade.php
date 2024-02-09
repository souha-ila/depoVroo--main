@extends('layouts.app')

@section('content')

<div class="card mb-3 mt-5">
    <div class="row g-0">

      @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
        <div class="col-md-4">
            <img src="{{ asset('/storage/'.$viewData["cars"]->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["cars"]["name"] }} (${{ $viewData["cars"]["price"] }})
                </h5>
                <p class="card-text">{{ $viewData["cars"]["model"] }}</p>
                <p class="card-text">{{ $viewData["cars"]["description"] }}</p>
                
                <!-- Bouton "Réserver" -->
                <button class="mt-5 btn bg-primary text-white" id="reserveBtn">Reserve</button>
                
                <!-- Formulaire de réservation (initiallement masqué) -->
                <form id="reservationForm" class="mt-3" style="display: none;" action="{{ route('reservations.store') }}" method="POST">

                    @csrf
                    
                    <!-- Champs du formulaire -->
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Date de début</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <input type="hidden" name="car_id" value="{{ $viewData['cars']->getId() }}">

                    <div class="mb-3">
                        <label for="end_date" class="form-label">Date de fin</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    
                    <!-- Ajoutez ici d'autres champs du formulaire -->
                    
                    <button type="submit" class="btn btn-primary">Validate</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Script JavaScript pour gérer l'affichage du formulaire de réservation
    document.getElementById('reserveBtn').addEventListener('click', function() {
        document.getElementById('reservationForm').style.display = 'block';
    });
</script>

@endsection
