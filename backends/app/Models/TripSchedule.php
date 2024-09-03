<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripSchedule extends Model
{
    protected $fillable = [
        'trip_id', 'day_of_week', 'time_slot'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
