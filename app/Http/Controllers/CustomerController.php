<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;


class CustomerController extends Controller
{
    
    function index(){
        return customer::all();
    }

    function customerGet(Request $request){
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Retrieve email and password from request
        $email = $request->input('email');
        $password = $request->input('password');

        // Attempt to retrieve customer based on email and password
        $customer = Customer::where('email', $email)->where('password', $password)->first();

        if ($customer) {
            return response()->json(['customer' => $customer]);
        } else {
            return response()->json(['error' => 'Invalid email or password'], 401);
        }
    }



}
