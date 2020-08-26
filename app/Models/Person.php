<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function healthStatus()
    {
        return $this->belongsTo('App\Models\HealthStatus');
    }

    public function phones()
    {
        return $this->hasMany('App\Models\Phone');
    }

    public function documents()
    {
        return $this->hasMany('App\Models\Document');
    }
}
