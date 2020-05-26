<?php

namespace App\Entities;

// use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = ['id'];
    public function comments()
    {
        return $this->hasMany(Comment::class, 'account_id', 'id');
    }
}
