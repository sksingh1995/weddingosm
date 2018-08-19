<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active',1);
        });
    }
    
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
