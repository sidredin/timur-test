<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthStatus extends Model
{
    public function people()
    {
        return $this->hasMany('App\Models\Person');
    }
}
