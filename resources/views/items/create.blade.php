@extends('layouts.app')

@section('content')
    <h1>Create New Item</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('items.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" required min="1" max="120">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Create Item</button>
                <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
