<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;

class SaleController extends Controller
{
    //
    function index(){
        return sale::all();
    }


    function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'sale_date' => 'required|date',
            'dealer_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'vehicle_id' => 'required|integer',
        ]);

        // Create a new Sale instance with the validated data
        $sale = Sale::create($validatedData);

        // Return a response indicating successful creation along with the created sale data
        return response()->json([
            'message' => 'Sale created successfully',
            'sale' => $sale
        ], 201);
    }
}
