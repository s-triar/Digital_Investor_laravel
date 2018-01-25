<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    public function auth()
    {
        return $this->hasMany('App\Auth', 'id_level');
    }
}
