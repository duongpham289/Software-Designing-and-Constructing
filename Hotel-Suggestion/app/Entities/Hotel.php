<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel';
    public function room()
    {
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }
}
