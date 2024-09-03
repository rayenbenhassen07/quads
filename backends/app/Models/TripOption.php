<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripOption extends Model
{
    protected $fillable = [
        'trip_id', 'option_name', 'option_type', 'additional_price'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
