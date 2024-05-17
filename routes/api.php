<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//controllers
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\ManufacturingController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\InventoryController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Customer
Route::get("customersAll", [CustomerController::class, 'index']);
Route::post("customerGet", [CustomerController::class, 'customerGet']);



//dealer
Route::get("dealersAll", [DealerController::class, 'index']);


//brand
Route::get("brandsAll", [BrandController::class, 'index']);


//models
Route::get("modelsAll", [ModelController::class, 'index']);


//manufacturing
Route::get("plantsAll", [ManufacturingController::class, 'index']);


//vehicle
Route::get("vehiclesAll", [VehicleController::class, 'index']);


//sale
Route::get("salesAll", [SaleController::class, 'index']);
Route::post("salesAdd", [SaleController::class, 'store']);



//inventory
Route::get("inventoryAll", [InventoryController::class, 'index']);