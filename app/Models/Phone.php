<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    public function phoneType()
    {
        return $this->belongsTo('App\Models\PhoneType');
    }
}
