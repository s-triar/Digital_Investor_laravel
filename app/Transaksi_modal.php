<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi_modal extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'transaksi_modal';
    public function usaha()
    {
        return $this->belongsTo('App\Usaha', 'id_usaha');
    }
    public function investor()
    {
        return $this->belongsTo('App\Investor', 'id_investor');
    }
    public function admin_recieve()
    {
        return $this->belongsTo('App\Admin', 'id_admin_recieve');
    }
    public function admin_transfer()
    {
        return $this->belongsTo('App\Admin', 'id_admin_transfer');
    }
    public function verified_transaksi_modal()
    {
        return $this->belongsTo('App\Verified_transaksi_modal', 'verified');
    }
    public function pelunasan()
    {
        return $this->hasOne('App\Pelunasan', 'id_transaksi');
    }
}
