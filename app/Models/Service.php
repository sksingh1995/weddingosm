<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
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
    protected $fillable = ['service_name'];

    /**
     * service_name attribute setter
     * @param string $value
     * @return void
     */
    public function setServiceNameAttribute($value)
    {
        $this->attributes['service_name'] = strtolower($value);
    }
}
