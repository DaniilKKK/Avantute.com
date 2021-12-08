<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function tour() {
        return $this->belongsTo(Tour::class);
    }

    public function client() {
        return $this->belongsTo(User::class);
    }

    public function collaborator() {
        return $this->belongsTo(User::class);
    }
}