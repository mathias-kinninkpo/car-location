<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand', 'model', 'year', 'registration_number', 'availability', 'description', 'image'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
