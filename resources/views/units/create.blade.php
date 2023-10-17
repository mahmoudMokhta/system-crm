@extends('layouts.main')

@section('content')
    <div class="">
        <div class="col-md-8 m-auto">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Create New Unit</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('storeUnits') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example1">Unit Number</label>
                                    <input name="unit_number" type="number" id="form7Example1"
                                        value="{{ old('unit_number') }}" class="form-control" />
                                    @error('unit_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Street Name</label>
                                    <input name="street_name" type="text" id="form7Example2"
                                        value="{{ old('street_name') }}" class="form-control" />
                                    @error('street_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Building Number</label>
                                    <input name="building_number" type="number" id="form7Example2"
                                        value="{{ old('building_number') }}" class="form-control" />
                                    @error('building_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example1">City</label>
                                    <input name="city" type="text" id="form7Example1" value="{{ old('city') }}"
                                        class="form-control" />
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Price</label>
                                    <input name="price" type="number" id="form7Example2" value="{{ old('price') }}"
                                        class="form-control" />
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Square Feet</label>
                                    <input name="square_feet" type="number" id="form7Example2"
                                        value="{{ old('square_feet') }}" class="form-control" />
                                    @error('square_feet')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example1">Bedrooms</label>
                                    <input name="bedrooms" type="number" id="form7Example1" value="{{ old('bedrooms') }}"
                                        class="form-control" />
                                    @error('bedrooms')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Bathrooms</label>
                                    <input name="bathrooms" type="number" id="form7Example2"
                                        value="{{ old('bathrooms') }}" class="form-control" />
                                    @error('bathrooms')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!-- Type input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example4">Type</label>
                            <select name="type" id=" "class="form-control">
                                <option value="Home">Home</option>
                                <option value="Office">Office</option>
                            </select>
                        </div>
                        <!-- Checked checkbox -->
                        <div class="form-check form-outline mb-4">
                            <label class="form-check-label" for="flexCheckDefault">Has Garage </label>
                            <input class="form-check-input" type="checkbox" value="1" name="garage"
                                id="flexCheckDefault" />
                        </div>
                        <!-- Checked checkbox -->
                        <div class="form-check form-outline mb-4">
                            <label class="form-check-label" for="flexCheckChecked">Has Bool</label>
                            <input class="form-check-input" type="checkbox" value="1" name="pool"
                                id="flexCheckChecked" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example4">Description</label>
                            <textarea name="description" id="form7Example4" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example4">Add one or more photos</label>
                            <input name="image[]" type="file" id="form7Example4" class="form-control" multiple />
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark ">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
