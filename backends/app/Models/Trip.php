<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'quantity_title', 'remarque_question', 'price', 'localisation'
    ];

    public function schedules()
    {
        return $this->hasMany(TripSchedule::class);
    }

    public function options()
    {
        return $this->hasMany(TripOption::class);
    }

    public function images()
    {
        return $this->hasMany(TripImage::class);
    }
}
