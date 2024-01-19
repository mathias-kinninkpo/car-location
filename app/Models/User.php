<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable ;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable ;

    protected $fillable = ['name', 'email', 'password', 'role', 'about', 'country', 'enterprise', 'phone', 'job'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }


}
