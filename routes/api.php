<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('customers', CustomerController::class);
Route::apiResource('customers', CustomerController::class)->middleware('auth:api');
//Route::apiresource('items', ItemController::class);
//Route::apiresource('items', ItemController::class)->middleware('auth:api');
