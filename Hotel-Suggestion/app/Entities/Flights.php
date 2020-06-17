<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
}
