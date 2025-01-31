<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PastWork extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'img',
        'active',
        'order',
    ];
}
