<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dealer;

class DealerController extends Controller
{
    //
    function index(){
        return dealer::all();
    }
}
