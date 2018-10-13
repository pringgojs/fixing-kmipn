<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juri extends Model
{
    protected $table = 'juris';   
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
}
