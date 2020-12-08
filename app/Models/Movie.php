<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [        
        'title',
        'director',
        'running_time',
        'trailer_url',
        'status',
        'date_showing',
        'producers',
        'starring',
        'screenplay_by',
        'story_by',
        'distributed_by',
        'production_company',
        'ticket_price',
        'release_date',
        'genre',
        'language',
        'edited_by',
        'music_by',
        'cinematography',
        'synopsis'
    ];
}
