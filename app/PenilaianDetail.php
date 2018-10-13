<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianDetail extends Model
{
    protected $table = 'penilaian_details';   
    public $timestamps = false;

    public function penilaian()
    {
        return $this->belongsTo('App\Penilaian', 'penilaian_id');
    }

    public function indikator()
    {
        return $this->belongsTo('App\Indikator', 'indikator_id');
    }
}
