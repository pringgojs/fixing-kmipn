<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lomba extends Model
{
    use SoftDeletes;
    
    protected $table = 'lomba';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kategori_id',
        'pengumuman',
        'deskripsi',
        'peraturan',
    ];

    protected $dates = ['deleted_at'];

    public function tim()
    {
        return $this->hasMany('App\Tim', 'kategori_id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    
    public function getTotal()
    {
        $total = Tim::where('kategori_id', $this->id)->get()->count();
        return $total;
    }
}
