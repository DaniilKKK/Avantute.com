<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use Notifiable;

    protected $guarded = [];

    protected $fillable = [
        'name', 'vehicle_id', 'city_id', 'visaService', 'habitation', 'food', 'excursions', 'departureDate', 'arrivalDate'
    ];

    public function tour() {
        return $this->hasMany(Tour::class);
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
}