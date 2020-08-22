<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function people()
    {
        return $this->hasMany('App\Models\Person');
    }
}
