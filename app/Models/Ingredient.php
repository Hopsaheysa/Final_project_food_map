<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;
use App\Models\User;

class Ingredient extends Model
{
    use HasFactory;

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
