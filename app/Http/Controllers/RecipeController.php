<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;

class RecipeController extends Controller
{
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes.recipe', compact('recipe'));
    }

    public function fetchRecipe($id)
    {
        $recipe = Recipe::findOrFail($id);
        return $recipe;
    }

    public function addReview($id)
    {
        $user = auth()->user();
    }
}
