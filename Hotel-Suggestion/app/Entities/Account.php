<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = ['id'];
    protected $table = "accounts";

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'account_id','id');
    }
}
