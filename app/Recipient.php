<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'recipients';


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
        'way_point_id', 'name', 'phone', 'parcel_description'
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
     * A recipient has one way point
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wayPoint() {
        return $this->hasOne('App\WayPoint', 'id', 'way_point_id');
    }
}
