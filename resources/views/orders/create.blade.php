@extends('layouts.app')

@section('content')
<h1>Create Order</h1>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="ordername">Order Name</label>
        <input type="text" name="ordername"  id="ordername" class="form-control" required >
    </div>

    <div class="form-group">
        <label for="customerno">Customer No</label>
        <input type="text" name="customerno"  id="customerno" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" class="form-control"  required>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" class="form-control"  required>
    </div>

    <button type="submit" class="btn btn-primary">Create Order</button>
</form>
@endsection
