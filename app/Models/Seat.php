<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [        
        'movie_id',
        'user_id',
        'seat_type',
        'seat_column',
        'seat_row',
        'view_date',
        'total_price',
        'view_time'
    ];
}
