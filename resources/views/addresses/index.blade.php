@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Addresses</h1>
        <a href="{{ route('addresses.create') }}" class="btn btn-primary">Add Address</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Street</th>
                <th>City</th>
                <th>Province</th>
                <th>Country</th>
                <th>Postal Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($addresses->count() > 0)
                @foreach($addresses as $address)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $address->street }}</td>
                        <td>{{ $address->city }}</td>
                        <td>{{ $address->province }}</td>
                        <td>{{ $address->country }}</td>
                        <td>{{ $address->postal_code }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('addresses.show', $address->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('addresses.edit', $address->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">No addresses found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
