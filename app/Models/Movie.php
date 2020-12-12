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
        'starting_at',
        'ending_at',
        'producers',
        'starring',
        'screenplay_by',
        'story_by',
        'distributed_by',
        'production_company',
        'ticket_price',
        'release_date',
        'genre_id',
        'language',
        'edited_by',
        'music_by',
        'cinematography',
        'synopsis'
    ];

    protected $casts = [
        'running_time' => 'integer',
        'ticket_price' => 'double',
        'genre_id'     => 'integer'
    ];

    protected $appends = [
        'genre_name'  
    ];

    public function getGenreNameAttribute(){
        if($this->genre){
            return $this->genre->name;
        }       
        return null;     
    }

    public function genre(){return $this->belongsTo(Genre::class);}    
}
