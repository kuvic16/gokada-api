<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingPrice extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'setting_prices';


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
        'city_id', 'price_km', 'price_mn', 'start_at', 'end_at'
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
        'start_at' => 'datetime',
        'end_at' => 'datetime'
    ];


    /**
     * A setting price belongs to a city
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city() {
        return $this->belongsTo('App\City');
    }
}
