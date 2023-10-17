@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Show Unit</h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div id="carouselExampleInterval" style="max-width: 35rem;" class="carousel slide m-auto"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($unit->photos as $key => $photo)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="3000">
                                        <img src="{{ Storage::url($photo->photo_path) }}"
                                            class="d-block rounded "style='width: 34em ;height:25em;' alt="Unit Photo">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-success my-3">Buy This Unit Now</button>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4">
                        <h2>{{ $unit->unit_number }} - {{ $unit->street_name }}, {{ $unit->city }}</h2>
                        <p>Type: {{ $unit->type }}</p>
                        <p>Price: ${{ $unit->price }}</p>
                        <p>Square Feet: {{ $unit->square_feet }} sq ft</p>
                        <p>Bedrooms: {{ $unit->bedrooms }}</p>
                        <p>Bathrooms: {{ $unit->bathrooms }}</p>
                        <p>Garage: {{ $unit->garage ? 'Yes' : 'No' }}</p>
                        <p>Pool: {{ $unit->pool ? 'Yes' : 'No' }}</p>
                        <p>Description: {{ $unit->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
