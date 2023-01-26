<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteFour extends Model
{
    use HasFactory;

    protected $fillable = [
        'morning_stop',
        'morning_time',
        'evening_stop',
        'evening_time',
    ];
}
