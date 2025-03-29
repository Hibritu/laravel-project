@extends('layouts.app')

@section('content')
    <h1>Items</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Create New Item</a>

    <div class="card">
        <div class="card-body">
            @if($items->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No items available. <a href="{{ route('items.create') }}" class="btn btn-link">Create a new item</a></p>
            @endif
        </div>
    </div>
@endsection
