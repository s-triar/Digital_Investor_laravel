<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foto_jaminan extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'foto_jaminan';
    
    public function jaminan()
    {
        return $this->belongsTo('App\Jaminan', 'id_jaminan');
    }
}
