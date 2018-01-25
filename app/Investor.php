<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investor extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'investor';
    public function auth()
    {
        return $this->hasOne('App\Auth','id', 'id_auth');
    }
    public function admin()
    {
        return $this->belongsTo('App\Admin', 'id_admin');
    }
    public function transaksi_modal()
    {
        return $this->hasMany('App\Transaksi_modal', 'id_investor');
    }
    public function pelunasan()
    {
        return $this->hasMany('App\Pelunasan', 'id_investor');
    }
}
