<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    public function hotels()
    {
        return $this->belongsTo(Hotel::class);
    }
}
