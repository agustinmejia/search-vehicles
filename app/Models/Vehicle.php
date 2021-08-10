<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    public $fillable = [
        'brand_id', 'vehicles_type_id', 'color', 'year', 'photos', 'engine_code', 'chassis_code', 'plate_number', 'status'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function vehicles_type()
    {
        return $this->belongsTo(VehiclesType::class, 'vehicles_type_id');
    }
}
