<?php

namespace App;

use Illuminate\Foundation\Auth\Video as Authenticatable;

class Video extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $guarded = ['method', 'token', 'password_confirmation'];
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function hasRole($role)
    {
      return $this->role == $role;
    }
}
