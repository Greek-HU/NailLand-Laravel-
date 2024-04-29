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

    public function Nail():HasMany
    {
        return $this->hasMany(Nail::class);
    }
    public function NailType()
    {
        return $this->BelongsTo(NailType::class);
    }
    public function Price()
    {
        return $this->BelongsTo(Price::class);
    }
}
