<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $dates = [
        'limited_at',
    ];


    function getLimittedAtAttribute()
    {
        return $this->attributes['limited_at']->format('d/m/Y');
    }

    function setLimittedAtAttribute($value)
    {
        $this->attributes['limited_at']= $value->format('d/m/Y');
    }
}
