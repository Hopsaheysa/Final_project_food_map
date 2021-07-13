<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Comment;

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

    public function fetchReview($id)
    {
        $user = auth()->user();
        $review = Comment::where("recipe_id", $id)
            ->leftJoin("users", "user_id", '=', "comments.user_id")
            ->get();
        return $review;
    }

    public function storeReview($id, Request $request)
    {
        $user = auth()->user();
        $review = $request->all();
        $newReview = new Comment;
        $newReview->recipe_id = $id;
        $newReview->user_id = $user->id;
        $newReview->text = $review[0];

        $newReview->save();


        return [
            'status' => 'success'
        ];
    }
}
