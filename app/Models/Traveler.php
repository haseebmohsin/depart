<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'system_id',
        'department',
        'challan',
        'phone',
        'gender',
        'shift',
        'route_no',
        'stop_name',
        'photo',
        'secret',
    ];
}
