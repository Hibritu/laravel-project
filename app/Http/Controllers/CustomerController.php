<?php

namespace App\Http\Controllers;

use App\Models\Customer; // Fixed: Capitalized model name
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customerno' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Customer::create($validated); // Using validated data only

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer) // Fixed: Capitalized type hint
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer) // Fixed: Capitalized type hint
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer) // Fixed: Capitalized type hint
    {
        $validated = $request->validate([ // Added validation
            'customerno' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $customer->update($validated); // Fixed typo: $requset to $request, using validated data

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer) // Fixed: Capitalized type hint
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}