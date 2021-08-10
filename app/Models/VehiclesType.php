<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehiclesType extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'vehicles_class_id ', 'name', 'slug', 'details'
    ];

    public function vehicles_class()
    {
        return $this->belongsTo(VehiclesClass::class, 'vehicles_class_id');
    }
}
