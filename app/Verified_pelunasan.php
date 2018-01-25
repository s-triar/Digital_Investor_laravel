<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Verified_pelunasan extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'verified_pelunasan';
    public function pelunasan()
    {
        return $this->hasMany('App\Pelunasan', 'verified');
    }
}
