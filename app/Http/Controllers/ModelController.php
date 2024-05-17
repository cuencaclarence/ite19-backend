<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models;

class ModelController extends Controller
{
    //
    function index(){
        return models::all();
    }
}
