<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function accounts()
    {
        return $this->belongsTo(Account::class,'account_id','id');
    }

}
