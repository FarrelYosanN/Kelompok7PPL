@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Contact</h1>
    <hr />
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $contact->first_name }}">
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $contact->last_name }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $contact->email }}">
            </div>
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $contact->phone }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
