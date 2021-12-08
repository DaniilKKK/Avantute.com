<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tour extends Model
{
    use Notifiable;

    protected $fillable = [
        'service_id', 'name', 'description', 'people', 'duration', 'price', 'image'
    ];

    protected $guarded = [];

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
}