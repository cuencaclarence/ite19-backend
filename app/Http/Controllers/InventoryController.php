<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventory;

class InventoryController extends Controller
{
    function index(){
        return inventory::all();
    }
}
