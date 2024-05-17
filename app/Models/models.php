<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_name',
        'brand_id'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicles::class);
    }
}
