@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Create New Customer</a>

    <div class="card"> 
        <div class="card-body">
            @if ($customers->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Customer No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->customerno }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
                <p>No customers available. <a href="{{ route('customers.create') }}" class="btn btn-link">Create a new customer</a></p>
            @endif
        </div>
    </div>
@endsection
