<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'orders';


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
        'order_id', 'user_id', 'driver_id', 'setting_price_id', 'completed_at'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'completed_at' => 'datetime',
    ];


    /**
     * An order is belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }


    /**
     * An order is belongs to a driver
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver() {
        return $this->belongsTo('App\Driver', 'id', 'driver_id');
    }


    /**
     * An order has price setting
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function settingPrice() {
        return $this->hasOne('App\SettingPrice', 'id', 'setting_price_id');
    }


    /**
     * An order might have multiple way point
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wayPoints() {
        return $this->hasMany('App\WayPoint');
    }


    /**
     * An order belongs to a recipient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipient() {
        return $this->belongsTo('App\Recipient');
    }

    /**
     * An order belongs to a driver rating
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driverRating() {
        return $this->belongsTo('App\DriverRating');
    }


    public function price(){
        // calculate the price based on way point distance and time
    }


    public function status(){
        // status will be define by way points status
    }
}
