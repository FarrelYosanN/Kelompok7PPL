@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Contact</h1>
    <hr />
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
