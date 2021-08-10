<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id', 'city_id', 'person_id', 'user_id', 'assigned_id', 'type', 'address', 'address_zone', 'location', 'details', 'description', 'date'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assigned()
    {
        return $this->belongsTo(User::class, 'assigned_id');
    }
}
