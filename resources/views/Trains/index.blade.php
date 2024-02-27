@extends('layouts.app')

@section('page-title', 'movies')

@section('main-content')
<div class="container">
    <div class="row">
        <h1 class=" p-3">
            Trains
        </h1>    
        @foreach ($trains as $index => $train)
        <div class="card m-4 p-2" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $train->Agency }}</h5>
            <p class="card-text">{{ $train->DepartureStation }}</p>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Arrival Station:</strong> {{ $train->ArrivalStation }}</li>
            <li class="list-group-item"><strong>Departure Time:</strong> {{ $train->DepartureTime }}</li>
            <li class="list-group-item"><strong>Arrival Time:</strong> {{ $train->ArrivalTime }}</li>
            <li class="list-group-item"><strong>Train Code:</strong> {{ $train->TrainCode }}</li>
            <li class="list-group-item"><strong>Number of Carriages:</strong> {{ $train->NumberOfCarriages }}</li>
            <li class="list-group-item"><strong>Intime:</strong> {{ $train->Intime }}</li>
            <li class="list-group-item"><strong>Deleted:</strong> {{ $train->Deleted }}</li>

            </ul>
            <div class="card-body">
            <a href="#" class="card-link">Scopri i dettagli</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection