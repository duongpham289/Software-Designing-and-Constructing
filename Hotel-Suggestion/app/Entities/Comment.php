<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function accounts()
    {
        return $this->belongsTo(Account::class,'account_id','id');
    }

    public function hotels()
    {
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }

}
