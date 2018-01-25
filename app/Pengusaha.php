<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengusaha extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'pengusaha';
    protected $fillable = 
    [
        'id','id_auth', 'nik','nama', 'alamat', 'telepon', 'tempat_lahir' , 'tanggal_lahir', 'jenis_kelamin' , 'agama' , 'url_foto_ktp', 'url_foto', 'verified'
    ];
    public function auth()
    {
        return $this->hasOne('App\Auth','id', 'id_auth');
    }
    public function admin()
    {
        return $this->belongsTo('App\Admin', 'id_admin');
    }
    public function usaha()
    {
        return $this->hasMany('App\Usaha', 'id_pengusaha');
    }

    public function checkIfFilledProfil($id_auth)
    {
        return $this::where('id_auth', $id_auth)->first();
    }
}
