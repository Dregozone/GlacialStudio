<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannedIpAddress extends Model
{
    protected $fillable = [
        'ip_address',
        'reason',
    ];
}
