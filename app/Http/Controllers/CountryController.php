<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search($term)
    {


        $countries = Country::where('name', 'like', '%' . $term . '%')->get();
        return $countries;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allCountries()
    {
        $countriesAll = Country::all();
        return $countriesAll;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($country_id)
    {
        $country = Country::findOrFail($country_id);

        $user = auth()->user();
        if ($user) {
            $dislikedIngredient = $user->dislikesIngredients;
            // all recipes from country => this will be changed 
            // according to preference if user is logged in 
            $recipeQuery = $country->recipes()->with("ingredients")
                ->leftJoin('ingredient_recipe', function ($join) use ($dislikedIngredient) {
                    $join->on('recipes.id', '=', 'ingredient_recipe.recipe_id')
                        ->whereIn('ingredient_recipe.ingredient_id', $dislikedIngredient->pluck("id"));
                })
                ->whereNull('ingredient_recipe.id');

            if ($user->isVegan) {
                $recipeQuery->where('isVegan', true);
            }

            if ($user->isVegetarian) {
                $recipeQuery->where('isVegetarian', true);
            }

            if ($user->isLactoseFree) {
                $recipeQuery->where('isLactoseFree', true);
            }
            if ($user->isGlutenFree) {
                $recipeQuery->where('isGlutenFree', true);
            }
            if ($user->isNutFree) {
                $recipeQuery->where('isNutFree', true);
            }
            $recipes = $recipeQuery->get();
        } else {
            // if user is not logged in we will get all recipes
            $recipes = $country->recipes()->with("ingredients")->get();
        }
        // dd($user);
        return $recipes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
