
@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: #4e73df;">Dashboard</h1>




    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg" style="background-color:#baa110;">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #4e73df;">Total Customers</h5>
                    <p class="card-text text-center" style="font-size: 2rem; font-weight: bold;">{{ $totalCustomers }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg"style="background-color:#baa110">
                <div class="card-body text-center" style="color: #4e73df;">
                    <h5 class="card-title">Total Items</h5>
                    <p class="card-text text-center" style="font-size: 2rem; font-weight: bold;">{{ $totalItems }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg"style="background-color:#baa110">
                <div class="card-body text-center" style="color: #4e73df;">
                    <h5 class="card-title text-center" style="color: #4e73df;">Total Orders</h5>
                    <p class="card-text text-center" style="font-size: 2rem; font-weight: bold;">{{ $totalOrders }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection 
