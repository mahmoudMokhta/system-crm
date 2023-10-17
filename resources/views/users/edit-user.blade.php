@extends('layouts.main')

@section('content')
    <form class="row g-3" action="{{ route('update.user', $user->id) }}" method="post">

        @csrf

        <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class="col-9">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ $user->address }}">
        </div>

        <div class="col-md-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" value="{{ $user->city }}">
        </div>

        <div class="col-md-6">
            <label for="contact_num_one" class="form-label">Contact Number one</label>
            <input type="text" class="form-control" name="contact_num_one" id="contact_num_one"
                value="{{ $user->contact_num_one }}">
        </div>

        <div class="col-md-6">
            <label for="connumtwo" class="form-label">Contact Number two</label>
            <input type="text" class="form-control" name="contact_num_two" id="connumtwo"
                value="{{ $user->contact_num_two }}">
        </div>


        <div class="col-md-3">
            <label for="Project" class="form-label">Project</label>
            <input type="text" class="form-control" name="project" id="Project" value="{{ $user->project }}">
        </div>

        <div class="col-md-3">
            <label for="hiringdate" class="form-label">Hiring Date</label>
            <input type="date" class="form-control" name="hiring_date" id="hiringdate" value="{{ $user->hiring_date }}">
        </div>

        <div class="col-md-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" name="role" id="role" value="{{ $user->role }}">
        </div>

        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
@endsection
