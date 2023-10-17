@extends('layouts.main')

@section('content')
    <div class="col-md-8 m-auto">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">Create Users</h5>
            </div>
            <div class="card-body">
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="p-3">
                    <form class="row g-3" action="{{ route('load.user') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ old('email') }}">
                        </div>
                        <div class="col-9">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                value="{{ old('address') }}">
                        </div>

                        <div class="col-md-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city"
                                value="{{ old('city') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="contact_num_one" class="form-label">Contact Number one</label>
                            <input type="text" class="form-control" name="contact_num_one" id="contact_num_one"
                                value="{{ old('contact_num_one') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="connumtwo" class="form-label">Contact Number two</label>
                            <input type="text" class="form-control" name="contact_num_two" id="connumtwo"
                                value="{{ old('contact_num_two') }}">
                        </div>


                        <div class="col-md-4">
                            <label for="Project" class="form-label">Project</label>
                            <input type="text" class="form-control" name="project" id="Project"
                                value="{{ old('project') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="hiringdate" class="form-label">Hiring Date</label>
                            <input type="date" class="form-control" name="hiring_date" id="hiringdate"
                                value="{{ old('hiring_date') }}">
                        </div>




                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="">
                        </div>

                        <div class="col-md-6">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                                value="">
                        </div>

                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="user"
                                    value="user" checked>
                                <label class="form-check-label" for="user">
                                    User
                                </label>
                            </div>


                            <div class="form-check mt-2 ">
                                <input class="form-check-input" type="radio" name="role" id="admin"
                                    value="admin">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Admin
                                </label>
                            </div>

                        </div>


                        <div class="col-12">
                            <label for="avatar" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="profile_picture" id="avatar"
                                value="">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
