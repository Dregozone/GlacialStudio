<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'features',
        'default',
        'monthly_price',
        'yearly_price',
        'one_time_price',
        'active',
        'img',
        'link',
    ];
}
