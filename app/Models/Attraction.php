<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'destinations_id',
        'name',
        'description',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
