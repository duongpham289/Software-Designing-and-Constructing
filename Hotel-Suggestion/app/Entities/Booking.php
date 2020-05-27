<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = ['id'];
    protected $table = 'bookings';

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function room()
    {
        return $this->hasOne(Room::class,'room_id');
    }

}
