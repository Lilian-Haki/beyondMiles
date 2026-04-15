<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'membership_type',
        'join_date',
        'is_active',
    ];}
