<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tim extends Model
{
    use SoftDeletes;

    protected $table = 'tim';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','kategori_id', 'nama_tim', 'politeknik_id','file_proposal', 'total_anggota','status'
    ];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function politeknik()
    {
        return $this->belongsTo('App\Politeknik', 'politeknik_id');
    }

    public function scopeJoinPenilaian($q)
    {
        $q->join('penilaians', 'penilaians.tim_id', '=', $this->table.'.id');
    }

    public static function jumlahAnggota($tim)
    {
        return $user = User::where('tim_id', $tim->id)->whereNull('deleted_at')->get()->count();
    }
    
}
