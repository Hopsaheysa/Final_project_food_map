<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Ingredient;
use App\Models\Comment;
use App\Models\User;
use App\Models\Rating;

class Recipe extends Model
{
    use HasFactory;

    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
