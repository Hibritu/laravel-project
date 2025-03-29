<?php

namespace App\Http\Controllers;
use App\Models\Customer;  // Import the Customer model
use App\Models\Item;      // Import the Item model
use App\Models\Order; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCustomers=Customer::count();
        $totalItems=Item::count();
        $totalOrders=Order::count();
        return view('dashboard',compact('totalCustomers','totalItems','totalOrders')); // Return the 'dashboard' view
    }
}

