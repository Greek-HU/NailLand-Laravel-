<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phoneNum',
    ];

    
    public function Price()
    {
        return $this->BelongsTo(Price::class);
    }
}
