@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Address Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Street</label>
            <input type="text" name="street" class="form-control" placeholder="street" value="{{ $address->street }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" placeholder="city" value="{{ $address->city }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-control" placeholder="province" value="{{ $address->province }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Country</label>
            <input type="text" name="country" class="form-control" placeholder="country" value="{{ $address->country }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Postal code</label>
            <input type="text" name="postal code" class="form-control" placeholder="postal code" value="{{ $address->postal_code }}" readonly>
        </div>   
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $address->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $address->updated_at }}" readonly>
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col mb-3">
            <strong>Street:</strong> {{ $address->street }}
        </div>
        <div class="col mb-3">
            <strong>City:</strong> {{ $address->city }}
        </div>
    </div>
    <div class="row mb-3">
        <div class="col mb-3">
            <strong>Province:</strong> {{ $address->province }}
        </div>
        <div class="col mb-3">
            <strong>Country:</strong> {{ $address->country }}
        </div>
    </div>
    <div class="row mb-3">
        <div class="col mb-3">
            <strong>Postal Code:</strong> {{ $address->postal_code }}
        </div>
    </div> -->
    <div class="row">
        <div class="col">
            <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
