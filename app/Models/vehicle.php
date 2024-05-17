<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'vin',
        'brand_id',
        'model_id',
        'bodystyle',
        'color',
        'engine_type',
        'transmission_type',
        'plant_id',
        'price',
    ];

    public function models()
    {
        return $this->belongsTo(Models::class, 'model_id'); // Define the relationship with the Model model
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id'); // Define the relationship with the Model model
    }

    
}
