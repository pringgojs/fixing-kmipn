<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname','no_mahasiswa', 'email', 'password','jenis_kelamin','alamat','no_telp', 'jurusan', 'tempat_lahir','tgl_lahir','tim_id','role','anggota_ke','photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function tim()
    {
        return $this->hasMany('App\Tim', 'users_id');
    }
}
