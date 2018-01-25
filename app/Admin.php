<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    protected $table = 'admin';
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    public function auth()
    {
        return $this->hasOne('App\Auth_admin','id', 'id_auth_admin');
    }
    public function investor()
    {
        return $this->hasMany('App\Investor', 'id_admin');
    }
    public function pengusaha()
    {
        return $this->hasMany('App\Pengusaha', 'id_admin');
    }
    public function jaminan()
    {
        return $this->hasMany('App\Jaminan', 'id_admin');
    }
    public function transaksi_modal_recieve()
    {
        return $this->hasMany('App\Transaksi_modal', 'id_admin_recieve');
    }
    public function transaksi_modal_transfer()
    {
        return $this->hasMany('App\Transaksi_modal', 'id_admin_transfer');
    }
    public function pelunasan_recieve()
    {
        return $this->hasMany('App\Pelunasan', 'id_admin_recieve');
    }
    public function pelunasan_transfer()
    {
        return $this->hasMany('App\Pelunasan', 'id_admin_transfer');
    }
    public function income()
    {
        return $this->hasMany('App\Income', 'id_admin');
    }
}
