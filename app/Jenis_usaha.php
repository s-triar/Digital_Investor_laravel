<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_usaha extends Model
{
    protected $table = 'jenis_usaha';
    public function usaha()
    {
        return $this->hasMany('App\Usaha', 'jenis');
    }
}
