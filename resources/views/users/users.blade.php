@extends('layouts.main')

@section('content')
    <div class="mb-3">
        <a class="link ms-2" href="{{ route('create.user') }}">Create User</a>
        <a class="link ms-2" href="{{ route('deleted.user') }}">Deleted Users</a>
    </div>
    <table class="table  table-striped ms-0  w-100">
        <thead class="table-light">
            <tr class="table-dark">
                <th>Image</th>
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
            @foreach ($users as $user)
                <tr>
                    <td><img src="{{ Storage::url($user->profile_picture) }}" alt="" srcset="" width="50">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->contact_num_one }}</td>
                    <td>{{ $user->contact_num_two }}</td>
                    <td>{{ $user->title }}</td>
                    <td>{{ $user->project }}</td>
                    <td>{{ $user->hiring_date }}</td>
                    <td>{{ $user->role }}</td>

                    <td colspan="2">
                        <a class="btn btn-success me-1" href="{{ route('edit.user', $user->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('softdelete.user', $user->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
