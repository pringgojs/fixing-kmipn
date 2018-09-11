<?php

namespace App;

use App\Tim;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Politeknik extends Model
{
    use SoftDeletes;

    protected $table = 'politeknik';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'politeknik',
    ];

    protected $dates = ['deleted_at'];

    public function getJumlahPeserta($categori_id="", $status)
    {
        $total = Tim::whereHas('users', function ($query) {
            $query->where('role', '=', 'Ketua');
        })
        ->where('politeknik_id', $this->id)
        ->where('kategori_id', $categori_id)
        ->where('status', $status)
        ->get()
        ->count();

        return $total;
    }
    
}
