<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'cat_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'cat');
    }
}