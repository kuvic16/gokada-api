<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WayPoint extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'way_points';


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
        'order_id', 'pickup_location', 'dropoff_location', 'status', 'arrived_at', 'pickup_at', 'dropoff_at', 'distance', 'minutes'
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
        'arrived_at' => 'datetime',
        'pickup_at' => 'datetime',
        'dropoff_at' => 'datetime',
    ];


    /**
     * A way point is belongs to a order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order() {
        return $this->belongsTo('App\Order');
    }


    /**
     * A way point has one recipient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recipient(){
        return $this->hasOne('App\Recipient');
    }

    public function statusLabel(){

    }
}
