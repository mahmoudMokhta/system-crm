@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Clients</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>
                                            <div>{{ $client->contact_num_one }}</div>
                                            <div>{{ $client->contact_num_two }}</div>

                                        </td>
                                        @if ($client->status == 1)
                                            <td class="text-success">old client</td>
                                        @else
                                            <td class="text-danger">new client</td>
                                        @endif
                                        <td>{{ $client->address }}</td>
                                        <td class="d-flex justify-content-between">
                                            <a href="{{ route('editClients', $client->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('destroyClients', $client->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">x</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
