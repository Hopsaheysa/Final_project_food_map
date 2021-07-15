<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\User;
use App\Models\Comment;
use App\Models\Country;

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
    
        $recipe = new Recipe;


        if ($request->file("values.img")) {
            $image_name = $request->file('values.img')->storeAs('', $request->file('values.img')->getClientOriginalName(), 'uploads');

            $recipe->image = $image_name;
        }


        $recipe->name = $request->values["name"];
        $recipe->isVegan = number_format($request->values["isVegan"]);
        $recipe->isVegetarian = number_format($request->values["isVegetarian"]);
        $recipe->isLactoseFree = number_format($request->values["isLactoseFree"]);
        $recipe->isGlutenFree = number_format($request->values["isGlutenFree"]);
        $recipe->isNutFree = number_format($request->values["isNutFree"]);
        $recipe->instructions = $request->values["instructions"];

        $recipe->save();

        foreach ($request->country as $country) {
            $country = json_decode($country);

            $country_generated = Country::where("name", $country->country_name)->first();
            $recipe->countries()->attach($country_generated->id);
        }


        foreach ($request->ingredient as $ingr) {
            $ingredient = json_decode($ingr);

            $ingredient_generated = Ingredient::where("name", $ingredient->ingredient_name)->first();

            if (!$ingredient_generated) {
                $ingredientNew = new Ingredient;
                $ingredientNew->name = $ingredient->ingredient_name;
                $ingredientNew->save();
            } else {
                $ingredientNew = $ingredient_generated;
                $ingredientNew->save();
            }

            $recipe->ingredients()->attach($ingredientNew->id, ["quantity" => $ingredient->ingredient_quantity, "measurement" => $ingredient->ingredient_measurement]);
        }
         
        return [
            'status' => 'success'
        ];
    }
}
