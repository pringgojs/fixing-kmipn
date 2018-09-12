<?php

namespace App;

use App\Tim;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    
    protected $table = 'kategori';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kategori',
    ];

    protected $dates = ['deleted_at'];

    public function lomba()
    {
        return $this->hasMany('App\Lomba', 'kategori_id');
    }

    public function getTotal()
    {
        $tim = Tim::where('kategori_id', $this->id)->whereNull('deleted_at')->get()->count();
        return $tim;
    }
}
