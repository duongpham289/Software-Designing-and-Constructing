<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];

    protected $table = 'room';
}
