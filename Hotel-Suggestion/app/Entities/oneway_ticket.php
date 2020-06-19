<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class oneway_ticket extends Model
{
    protected $table = 'oneway_ticket';

    protected $guarded = ['id'];

    public $timestamps = false;
}
