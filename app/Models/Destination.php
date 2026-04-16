<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'destinations_id',
        'name',
        'description',
        'location',
        'working_days',
        'working_hours',
        'ticket_price',
    ];


    

    public function attractions()
    {
        return $this->hasMany(Attraction::class, 'destinations_id', 'destinations_id');
    }   
}
