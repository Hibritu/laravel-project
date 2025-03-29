<!-- app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Restaurant Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Customers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('items.index') }}">Items</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}">Orders</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- home.blade.php -->
@extends('app')
@section('content')
<div class="text-center">
    <h1>Welcome to the Restaurant Management System</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <a href="{{ route('customers.index') }}" class="btn btn-primary btn-lg w-100">Manage Customers</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('items.index') }}" class="btn btn-success btn-lg w-100">Manage Items</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('orders.index') }}" class="btn btn-warning btn-lg w-100">Manage Orders</a>
        </div>
    </div>
</div>
@endsection