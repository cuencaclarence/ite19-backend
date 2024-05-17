<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manufacturing;

class ManufacturingController extends Controller
{
    //
    function index(){
        return manufacturing::all();
    }
}
