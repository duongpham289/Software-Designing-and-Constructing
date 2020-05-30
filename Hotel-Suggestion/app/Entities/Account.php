<?php

namespace App\Entities;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// use Illuminate\Database\Eloquent\Model;

class Account extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'accounts';

    protected $fillable = [
        'name', 'email', 'password','level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guarded = ['id'];
    public function comments()
    {
        return $this->hasMany(Comment::class, 'account_id', 'id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'account_id','id');
    }

    public function setPasswordAttribute($password) //Mã hóa password khi store lên DB
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
