@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('items.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3"> {{-- Changed form-group to mb-3 for Bootstrap 5 --}}
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" 
                           class="form-control @error('name') is-invalid @enderror" 
                           value="{{ old('name', $item->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" 
                           class="form-control @error('price') is-invalid @enderror" 
                           value="{{ old('price', $item->price) }}" required min="1" max="120">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" name="category" id="category" 
                           class="form-control @error('category') is-invalid @enderror" 
                           value="{{ old('category', $item->category) }}" required>
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Item</button>
                <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
