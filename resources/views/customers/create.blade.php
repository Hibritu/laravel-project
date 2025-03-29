@extends('layouts.app')

@section('content')
    <h1>Create New Customer</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="customerno">Customer Number</label>
                    <input type="text" name="customerno" id="customerno" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Customer</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection