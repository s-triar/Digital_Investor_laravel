<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jaminan extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'jaminan';
    public function admin()
    {
        return $this->belongsTo('App\Admin', 'id_admin');
    }
    public function usaha()
    {
        return $this->belongsTo('App\Usaha', 'id_usaha');
    }
    public function jenis_jaminan()
    {
        return $this->belongsTo('App\Jenis_jaminan', 'id_jenis_jaminan');
    }
    public function foto_jaminan()
    {
        return $this->belongsTo('App\Foto_jaminan', 'id_jaminan');
    }
}
