<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Verified_transaksi_modal extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'verified_transaksi_modal';
    public function transaksi_modal()
    {
        return $this->hasMany('App\Transaksi_modal', 'verified');
    }
}
