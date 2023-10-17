@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Units</h6>
                </div>
                <div class="card-body">
                    {{-- <div class="table-responsive">


                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Unit Number</th>
                                    <th>Building Number</th>
                                    <th>Street Name</th>
                                    <th>City</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Square Feet</th>
                                    <th>Bedrooms</th>
                                    <th>Bathrooms</th>
                                    <th>Garage</th>
                                    <th>Pool</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($units as $unit)
                                    <tr>
                                        <td>{{ $unit->unit_number }}</td>
                                        <td>{{ $unit->building_number }}</td>
                                        <td>{{ $unit->street_name }}</td>
                                        <td>{{ $unit->city }}</td>
                                        <td>{{ $unit->type }}</td>
                                        <td>{{ $unit->price }}</td>
                                        <td>{{ $unit->square_feet }}</td>
                                        <td>{{ $unit->bedrooms }}</td>
                                        <td>{{ $unit->bathrooms }}</td>
                                        <td>{{ $unit->garage }}</td>
                                        <td>{{ $unit->pool }}</td>
                                        <td>{{ $unit->description }}</td>
                                        {{-- <td>
                                            @foreach ($unit->photos as $photo)
                                                <img src="{{ Storage::url($photo->photo_path) }}" width="100"
                                                    height="100">
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($unit->photos->first())
                                                <img src="{{ Storage::url($unit->photos->first()->photo_path) }}"
                                                    width="100" height="100">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('editUnit', $unit->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('destroyUnit', $unit->id) }}"
                                                class="btn btn-danger">Delete</a>
                                            {{-- show
                                            <a href="{{ route('showUnit', $unit->id) }}" class="btn btn-success">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}

                    <div class="row">
                        @foreach ($units as $unit)
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ Storage::url($unit->photos->first()->photo_path) }}" class="card-img"
                                            alt="..." style="width: 23em; height:24em; ">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Unit Number:{{ $unit->unit_number }}</h5>
                                            <div class="d-flex justify-content-around">
                                                <p class="card-text"><strong>Building Number:</strong>
                                                    {{ $unit->building_number }}</p>
                                                <p class="card-text"><strong>Street Name:</strong> {{ $unit->street_name }}
                                                </p>
                                            </div>

                                            <div class="d-flex justify-content-around">
                                                <p class="card-text"><strong>City:</strong> {{ $unit->city }}</p>
                                                <p class="card-text"><strong>Type:</strong> {{ $unit->type }}</p>
                                            </div>

                                            <div class="d-flex justify-content-around">
                                                <p class="card-text"><strong>Price:</strong> {{ $unit->price }}</p>
                                                <p class="card-text"><strong>Square Feet:</strong> {{ $unit->square_feet }}
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <p class="card-text"><strong>Bedrooms:</strong> {{ $unit->bedrooms }}</p>
                                                <p class="card-text"><strong>Bathrooms:</strong> {{ $unit->bathrooms }}</p>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                                <p class="card-text"><strong>Garage:</strong>
                                                    {{ $unit->garage ? 'it have a garage' : "it  haven't a garage" }}</p>
                                                <p class="card-text"><strong>Pool:</strong>
                                                    {{ $unit->pool ? 'it have a pool' : "it  haven't a pool" }}</p>
                                            </div>
                                            <p class="card-text"><strong>Description:</strong> {{ $unit->description }}</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('editUnit', $unit->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('showUnit', $unit->id) }}"
                                                    class="btn btn-success">Show</a>
                                                <a href="{{ route('destroyUnit', $unit->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
