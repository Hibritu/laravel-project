<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    
    }

    

    public function create()
    {
        // Ensure you're initializing a new order object
        $order = new Order();
        return view('orders.create', compact('order'));
    }
    
    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
{
    // Validate the incoming data
    $validated = $request->validate([
        'ordername' => 'required|string|max:255',
        'customerno' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',  // Ensure quantity is required and an integer
        'amount' => 'required|numeric|min:0',
        'status' => 'required|string|max:255',
    ]);

    // Create a new order
    Order::create($validated);

    // Redirect with a success message
    return redirect()->route('orders.index')->with('success', 'Order created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(Order $order)

    {
        
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([ // Added validation
            'ordername' => 'required|string|max:255',
            'customerno' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'amount' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $order->update($validated); // Fixed typo: $requset to $request, using validated data

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
