<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
