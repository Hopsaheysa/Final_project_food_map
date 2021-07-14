<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;
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
            ->with("user")
            ->get();
        return compact("review", "user");
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

    public function updateReview($recipe_id, $review_id, Request $request)
    {
        $review_text = $request->all();
        $text = $review_text["change"];

        Comment::where("id", $review_id)->update(["text" => $text]);

        return [
            'status' => 'success'
        ];
    }

    public function removeReview($id)
    {
        $user = auth()->user();
        Comment::where("id", $id)->delete();

        return [
            'status' => 'success'
        ];
    }

    public function editReview($id)
    {
        $user = auth()->user();
        $review = Comment::where("id", $id)->get();
        // $review->text = 
        return [
            'status' => 'success'
        ];
    }

    public function addRecipe(Request $request)
    {
        dd($request);
        $recipe = new Recipe;
        $recipe->name = $request->name;
        $recipe->isVegan = $request->isVegan;
        $recipe->isVegetarian = $request->isVegetarian;
        $recipe->isLactoseFree = $request->isLactoseFree;
        $recipe->isNutFree = $request->isNutFree;
        $recipe->instructions = $request->instructions;
        $recipe->image = $request->image;
    }
}
