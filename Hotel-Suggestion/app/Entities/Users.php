<?php

namespace App\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Users as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< Updated upstream:Hotel-Suggestion/app/Entities/Users.php
        //
=======
<<<<<<< Updated upstream:Hotel-Suggestion/app/Entities/User.php
        'name', 'email', 'password',
=======
        
>>>>>>> Stashed changes:Hotel-Suggestion/app/Entities/Users.php
>>>>>>> Stashed changes:Hotel-Suggestion/app/Entities/User.php
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

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id');
    // }

}
