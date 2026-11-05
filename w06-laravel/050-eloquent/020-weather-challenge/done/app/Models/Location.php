<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}
