<?php

namespace App\Models;

use Database\Factories\ContactMessageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    /** @use HasFactory<ContactMessageFactory> */
    use HasFactory;

    public const STATUS_NEW = 'new';

    public const STATUS_ACTIONED = 'actioned';

    public const STATUS_IGNORED = 'ignored';

    public const STATUSES = [
        self::STATUS_NEW,
        self::STATUS_ACTIONED,
        self::STATUS_IGNORED,
    ];

    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
    ];

    protected $attributes = [
        'status' => self::STATUS_NEW,
    ];
}
