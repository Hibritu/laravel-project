@extends('layouts.app')

@section('content')
<h1>Orders</h1>
<a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Create New Order</a>

<div class="card">
    <div class="card-body">
        @if ($orders->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order Name</th>
                        <th>Customer No</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->ordername }}</td>
                            <td>{{ $order->customerno }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->amount }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
            <p>No orders available. <a href="{{ route('orders.create') }}" class="btn btn-link">Create a new order</a></p>
        @endif
    </div>
</div>
@endsection
