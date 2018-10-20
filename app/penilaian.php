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

    public function scopeJoinTim($q)
    {
        $q->join('tim', 'tim.id', '=', $this->table.'.tim_id');
    }

    public function scopeJoinKategori($q)
    {
        $q->join('kategori', 'kategori.id', '=', 'tim.kategori_id');
    }

    public function scopeJoinPoliteknik($q)
    {
        $q->join('politeknik', 'politeknik.id', '=', 'tim.politeknik_id');
    }

    public function scopeSearch($q, $request)
    {
        if ($request->input('kategori')) {
            $q->where('kategori.id', $request->input('kategori'));
        }

        if ($request->input('politeknik')) {
            $q->where('politeknik.id', $request->input('politeknik'));
        }

        if ($request->input('juri')) {
            $q->where('penilaians.juri_id', $request->input('juri'));
        }
    }
}
