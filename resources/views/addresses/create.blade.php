@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Address</h1>
    <hr />
    <form action="{{ route('addresses.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="street" class="form-control" placeholder="Street">
            </div>
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="province" class="form-control" placeholder="Province">
            </div>
            <div class="col">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
