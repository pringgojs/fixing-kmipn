<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaians';   
    public $timestamps = true;

    public function juri()
    {
        return $this->belongsTo('App\Juri', 'juri_id');
    }

    public function tim()
    {
        return $this->belongsTo('App\Tim', 'tim_id');
    }
}
