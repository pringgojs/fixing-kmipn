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

    public function getJumlahPeserta($categori_id="", $status, $status_approved)
    {
        $total = Tim::whereHas('users', function ($query) {
            $query->where('role', '=', 'Ketua');
        })
        ->where('status_approved', $status_approved)
        ->where('politeknik_id', $this->id)
        ->where('kategori_id', $categori_id)
        ->where('status', $status)
        ->get()
        ->count();

        return $total;
    }

    public function getTotal()
    {
        $total = Tim::where('politeknik_id', $this->id)->whereNull('deleted_at')->get()->count();
        return $total;
    }

    

    public function getTotalBelumUnggah()
    {
        $tim = Tim::where('politeknik_id', $this->id)->whereNull('deleted_at')->where('status_approved', 0)->get()->count();
        return $tim;
    }

    public function getTotalPendingVerifikasi()
    {
        $tim = Tim::where('politeknik_id', $this->id)->whereNull('deleted_at')->where('status_approved', 1)->get()->count();
        return $tim;
    }

    public function getTotalTerverifikasi()
    {
        $tim = Tim::where('politeknik_id', $this->id)->whereNull('deleted_at')->where('status_approved', 2)->get()->count();
        return $tim;
    }
    
}
