@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="ordername" class="form-label">Order Name</label>
                    <input type="text" name="ordername" id="ordername" 
                           class="form-control @error('ordername') is-invalid @enderror" 
                           value="{{ old('ordername', $order->ordername) }}" required>
                    @error('ordername')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="customerno" class="form-label">Customer No</label>
                    <input type="text" name="customerno" id="customerno" 
                           class="form-control @error('customerno') is-invalid @enderror" 
                           value="{{ old('customerno', $order->customerno) }}" required>
                    @error('customerno')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" id="quantity" 
                           class="form-control @error('quantity') is-invalid @enderror" 
                           value="{{ old('quantity', $order->quantity) }}" required min="1">
                    @error('quantity')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" name="amount" id="amount" 
                           class="form-control @error('amount') is-invalid @enderror" 
                           value="{{ old('amount', $order->amount) }}" required min="0">
                    @error('amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="pending" {{ old('status', $order->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="approved" {{ old('status', $order->status) == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="shipped" {{ old('status', $order->status) == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ old('status', $order->status) == 'delivered' ? 'selected' : '' }}>Delivered</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Order</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
