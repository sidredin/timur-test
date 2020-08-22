<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function document()
    {
        return $this->belongsTo('App\Models\Document');
    }

    public function fileType()
    {
        return $this->belongsTo('App\Models\FileType');
    }
}
