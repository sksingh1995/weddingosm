<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
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

    public function faqs()
    {
        return $this->hasMany('App\Models\ServiceFaqs', 'service_id', 'id');
    }
}
