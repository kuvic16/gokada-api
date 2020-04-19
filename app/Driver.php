<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'drivers';


    /**
     * Specify primary key
     *
     * @var $primaryKey
     */
    protected $primaryKey = 'id';

    /**
     * Specify increment true
     *
     * @var $incrementing
     */
    public $incrementing = true;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'phone_verified_at', 'city_id', 'license_number', 'license_expire_at'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'phone_verified_at' => 'datetime',
        'license_expire_at' => 'datetime'
    ];


    /**
     * A driver has city
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city() {
        return $this->hasOne('App\City', 'id', 'city_id');
    }


    /**
     * A driver can have multiple orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(){
        return $this->hasMany('App\Order', 'driver_id', 'id');
    }
}
