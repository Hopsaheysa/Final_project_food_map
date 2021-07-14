<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ingredient;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function indexProfile()
    {

        $user = auth()->user();
        return view('auth.profile', compact("user"));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        User::where('id', auth()->id())->update([
            'isVegan' => isset($input['isVegan']),
            'isVegetarian' => isset($input['isVegetarian']),
            'isLactoseFree' => isset($input['isLactoseFree']),
            'isGlutenFree' => isset($input['isGlutenFree']),
            'isNutFree' => isset($input['isNutFree'])
        ]);

        foreach ($request->all() as $key => $value) {
            if (isset($value)) {
                if (str_starts_with($key, "ingredient_liked_")) {
                    $ingredient = Ingredient::where('name', $value)->first();
                    if (!$ingredient) {
                        $ingredient = new Ingredient();
                        $ingredient->name = $value;
                        $ingredient->save();
                    }

                    if (!DB::table('ingredient_user')->where('user_id', auth()->id())
                        ->where('ingredient_id', $ingredient->id)->first())
                        DB::table('ingredient_user')->insert([
                            'user_id' => auth()->id(),
                            'ingredient_id' => $ingredient->id,
                            'likes' => 1,
                            'dislikes' => 0
                        ]);
                }
            }
        }

        foreach ($request->all() as $key => $value) {
            if (isset($value)) {
                if (str_starts_with($key, "ingredient_disliked_")) {
                    $ingredient = Ingredient::where('name', $value)->first();
                    if (!$ingredient && isset($value)) {
                        $ingredient = new Ingredient();
                        $ingredient->name = $value;
                        $ingredient->save();
                    }

                    if (!DB::table('ingredient_user')->where('user_id', auth()->id())
                        ->where('ingredient_id', $ingredient->id)->first())
                        DB::table('ingredient_user')->insert([
                            'user_id' => auth()->id(),
                            'ingredient_id' => $ingredient->id,
                            'likes' => 0,
                            'dislikes' => 1
                        ]);
                }
            }
        }
        return redirect()->action("UserController@indexProfile");
    }

    public function dislikedIngredients()
    {
        return DB::table('ingredient_user')->leftJoin('ingredients', 'ingredient_user.ingredient_id', "=", "ingredients.id")
            ->where('user_id', auth()->id())
            ->where('dislikes', 1)->get();
    }

    public function removeIngredient($id)
    {
        $user = auth()->user();
        $ingredient = Ingredient::where("id", $id)->get();
        //this fucking shit is working but is not in fault... 
        $user->ingredients()->detach($ingredient);

        return [
            'status' => 'success'
        ];
    }

    public function showUser()
    {
        $user = auth()->user();
        return $user;
    }

    public function allUsers()
    {
        $users = User::all();
        return $users;
    }

    public function addAdmin($user)
    {
        User::where("name", $user)->update(["admin" => 1]);

        return [
            'status' => 'success'
        ];
    }
}
