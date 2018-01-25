<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kewenangan extends Model
{
    protected $table = 'kewenangan';
    public function auth_admin()
    {
        return $this->hasMany('App\Auth_admin', 'id_kewenangan');
    }
}
