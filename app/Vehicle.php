<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded = [];

    public function service() {
        return $this->hasMany(Service::class);
    }
}
