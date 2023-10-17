@extends('layouts.main')

@section('content')
    <div class="">
        <div class="col-md-8 m-auto">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Create New Client</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('storeClients') }}" method="post">
                        @csrf
                        <!-- name -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example3"> Name</label>
                            <input name="name" type="text" id="form7Example3" value="{{ old('name') }}"
                                class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- phone -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example1">Phone number</label>
                                    <input name="contact_num_one" type="text" id="form7Example1"
                                        value="{{ old('contact_num_one') }}" class="form-control" />
                                    @error('contact_num_one')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Anther Phone number</label>
                                    <input name="contact_num_two" type="text" id="form7Example2"
                                        value="{{ old('contact_num_two') }}" class="form-control" />
                                    @error('contact_num_two')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Address input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example4">Address</label>
                            <input name="address" type="text" id="form7Example4" value="{{ old('address') }}"
                                class="form-control" />
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example5">Email</label>
                            <input name="email" type="email" id="form7Example5" value="{{ old('email') }}"
                                class="form-control" />
                            @error('email')
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
