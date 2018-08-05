<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceFaqs extends Model
{
    protected $table = 'service_faqs';

    /**
     * inverse relation between service faq  and services
     * @return colleaction
     */
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }

    /**
     * model property accessor
     * @param string $value
     * @return array
     */
    public function getQuestionOptionsAttribute($value)
    {
        if ($value) {
            return json_decode($value);
        } else {
            return [];
        }
    }
}
