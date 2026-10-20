<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyVisitTotal extends Model
{
    protected $fillable = [
        'date',
        'human_visits',
        'unique_visitors',
    ];

    protected function casts(): array
    {
        return [
            'human_visits' => 'integer',
            'unique_visitors' => 'integer',
        ];
    }
}
