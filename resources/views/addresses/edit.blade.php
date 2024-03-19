@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Address</h1>
    <hr />
    <form action="{{ route('addresses.update', $address->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="street" class="form-control" placeholder="Street" value="{{ $address->street }}">
            </div>
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City" value="{{ $address->city }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="province" class="form-control" placeholder="Province" value="{{ $address->province }}">
            </div>
            <div class="col">
                <input type="text" name="country" class="form-control" placeholder="Country" value="{{ $address->country }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="{{ $address->postal_code }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
