<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usaha extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'usaha';
    public $incrementing = false;
    protected $fillable = 
    [
        'id','id_pengusaha', 'nama', 'alamat', 'jenis', 'keterangan' , 'modal', 'isFinal' , 'verified' , 'closed'
    ];

    public function pengusaha()
    {
        return $this->belongsTo('App\Pengusaha', 'id_pengusaha');
    }
    public function foto_usaha()
    {
        return $this->hasMany('App\Foto_usaha', 'id_usaha');
    }
    public function jaminan()
    {
        return $this->hasMany('App\Jaminan', 'id_usaha');
    }
    public function transaksi_modal()
    {
        return $this->hasMany('App\Transaksi_modal', 'id_usaha');
    }
    public function verified_usaha()
    {
        return $this->belongsTo('App\Verified_usaha', 'verified');
    }
    public function pelunasan()
    {
        return $this->hasMany('App\Pelunasan', 'id_usaha');
    }
    public function jenis_usaha()
    {
        return $this->belongsTo('App\Jenis_usaha', 'jenis');
    }

}
