<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverRating extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'driver_ratings';


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
        'order_id', 'driver_id', 'ratings', 'comments'
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
    ];


    /**
     * A driver rating belongs to a driver
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver() {
        return $this->belongsTo('App\Driver');
    }

    /**
     * A driver rating belongs to a order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order() {
        return $this->belongsTo('App\Order');
    }
}
