<?php
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route for the dashboard (authenticated)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Home Route (Authenticated users only)
Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');

// Resource routes for Customers and Items
Route::resource('customers', CustomerController::class);
Route::resource('items', ItemController::class);
Route::resource('orders', OrderController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/debug-routes', function() {
    return \Route::getRoutes()->getRoutesByName();
});
