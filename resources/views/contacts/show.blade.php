@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Contact Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="First Name" class="form-control" placeholder="First Name" value="{{ $contact->first_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="Last Name" class="form-control" placeholder="Last Name" value="{{ $contact->last_name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Email" value="{{ $contact->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="Phone" class="form-control" placeholder="Phone" value="{{ $contact->phone }}" readonly>
        </div>   
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $contact->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $contact->updated_at }}" readonly>
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col">
            <strong>First Name:</strong> {{ $contact->first_name }}
        </div>
        <div class="col">
            <strong>Last Name:</strong> {{ $contact->last_name }}
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <strong>Email:</strong> {{ $contact->email }}
        </div>
        <div class="col">
            <strong>Phone:</strong> {{ $contact->phone }}
        </div>
    </div> -->
    <div class="row">
        <div class="col">
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
