<?php

namespace App;

use App\Notifications\AuthResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auth extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'auth';
    public function level()
    {
        return $this->belongsTo('App\Level', 'id_level');
    }
    public function investor()
    {
        return $this->hasOne('App\Investor', 'id_auth');
    }
    public function pengusaha()
    {
        return $this->hasOne('App\Pengusaha', 'id_auth');
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama','token_register','id_level','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AuthResetPassword($token));
    }
}
