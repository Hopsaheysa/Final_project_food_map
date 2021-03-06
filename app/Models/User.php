<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Recipe;
use App\Models\Rating;
use App\Models\Ingredient;
use App\Models\Comment;
use App\Models\Reply;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'isVegan',
        'isVegetarian',
        'isLactoseFree',
        'isGlutenFree',
        'isNutFree'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
    public function dislikesIngredients()
    {
        return $this->belongsToMany(Ingredient::class)->wherePivot('dislikes', 1);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
