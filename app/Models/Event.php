<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image',
        'name',
        'description',
        'type',
        'duration',
        'distance',
        'time',
        'event_date',
        'status',
        'location',
        'included',
        'requirements',
        'price',
        'capacity',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'price' => 'decimal:2',
    ];
}
