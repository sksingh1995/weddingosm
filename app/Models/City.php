<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * remove timestamps from model
     * @var boolean
     */
    public $timestamps = false;

    /**
     * mass assignable attributes
     * @var array
     */

    protected $fillable = ['city_name'];

    /**
     * city_name attribute setter
     * @param string $value
     * @return void
     */
    public function setCityNameAttribute($value)
    {
        $this->attributes['city_name'] = strtolower($value);
    }
}
