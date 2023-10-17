@extends('layouts.main')

@section('content')
    <div class="">
        <div class="col-md-8 m-auto">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Update Client</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateClients', ['id' => $client->id]) }}" method="post">
                        @csrf
                        <!-- name -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example3"> Name</label>
                            <input value="{{ $client->name }}" name="name" type="text" id="form7Example3"
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
                                    <input value="{{ $client->contact_num_one }}" name="contact_num_one" type="text"
                                        id="form7Example1" class="form-control" />
                                    @error('contact_num_one')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form7Example2">Anther Phone number</label>
                                    <input value="{{ $client->contact_num_two }}" name="contact_num_two" type="text"
                                        id="form7Example2" class="form-control" />
                                    @error('contact_num_two')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Address input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example4">Address</label>
                            <input value="{{ $client->address }}" name="address" type="text" id="form7Example4"
                                class="form-control" />
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Status input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                @if ($client->status == 1)
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                @else
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                @endif
                            </select>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form7Example5">Email</label>
                            <input value="{{ $client->email }}" name="email" type="email" id="form7Example5"
                                class="form-control" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark ">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
