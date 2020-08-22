<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }
}
