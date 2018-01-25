<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_jaminan extends Model
{
    protected $table = 'jenis_jaminan';
    public function jaminan()
    {
        return $this->hasMany('App\Jaminan', 'id_jenis_jaminan');
    }
}
