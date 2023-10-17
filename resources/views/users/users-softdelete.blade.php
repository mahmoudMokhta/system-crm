@extends('layouts.main')

@section('content')

    <div class="mb-3">
        <a class="link" href="{{ route('users') }}">Back</a>

    </div>


    <table class="table  table-striped ms-0  w-100">

        <thead class="table-light" >
            <tr class="table-dark">
                <th>id</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>address</th>
                <th>City</th>
                <th>contact Num</th>
                <th>contact Num</th>
                <th>Title</th>
                <th>Project</th>
                <th>Hiring Date</th>
                <th>Role</th>
                <th>Ops</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($trashes as $trash)
                <tr>
                    <td>{{$trash->id}}</td>
                    <td>{{$trash->name}}</td>
                    <td>{{$trash->email}}</td>
                    <td>{{$trash->address}}</td>
                    <td>{{$trash->city}}</td>
                    <td>{{$trash->contact_num_one}}</td>
                    <td>{{$trash->contact_num_two}}</td>
                    <td>{{$trash->title}}</td>
                    <td>{{$trash->project}}</td>
                    <td>{{$trash->hiring_date}}</td>
                    <td>{{$trash->role}}</td>
                    
                    <td colspan="2">
                        <a class="btn btn-success me-1" href="{{ route('restore.user' , $trash->id) }}">Restore</a>
                        <a  class="btn btn-danger" href="{{ route('forcedelete.user' , $trash->id) }}">Delete</a>
                    </td>

                    
                </tr>
                @endforeach
        </tbody>
    </table>

@endsection
