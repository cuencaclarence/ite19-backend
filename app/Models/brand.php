<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand_name',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
