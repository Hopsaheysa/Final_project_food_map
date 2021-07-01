<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fact;
use App\Models\Recipe;

class Country extends Model
{
    use HasFactory;
    
    public function facts() 
    {
        return $this->hasMany(Fact::class);
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
    
}
