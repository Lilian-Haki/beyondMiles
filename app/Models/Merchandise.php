<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchandise extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'image',
        'stock_quantity',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}
