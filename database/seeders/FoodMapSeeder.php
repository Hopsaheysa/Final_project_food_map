<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Country;
use App\Models\Ingredient;
use App\Models\Fact;
use App\Models\Recipe;



class FoodMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();
        DB::table('ingredients')->truncate();
        DB::table('facts')->truncate();
        DB::table('recipes')->truncate();
        DB::table('ingredient_recipe')->truncate();
        DB::table('country_recipe')->truncate();

        //data from file DataProvider.php (same folder) => if you want to add recipes to seeder go there
        $data_recipes = DataProvider::getRecipes();
        $countries = DataProvider::getCountries();

        //this fills DB with Countries
        foreach ($countries as $iteration) {
            $country = new Country;
            $country->name = $iteration["name"];
            $country->flag = strtolower($iteration["flag"]);
            $country->save();
        }


        //this is yet not working but this should fill DB with recipes from array $data_recipes
        foreach ($data_recipes as $food) {
            $recipe = new Recipe;

            $recipe->name = $food["name"];
            $recipe->instructions = $food["instructions"];
            $recipe->image = $food["image"];
            $recipe->isVegan = $food["isVegan"];
            $recipe->isVegeterian = $food["isVegeterian"];
            $recipe->isLactoseFree = $food["isLactoseFree"];
            $recipe->isGlutenFree = $food["isGlutenFree"];
            $recipe->isNutFree = $food["isNutFree"];
            $recipe->save();

            foreach ($food["countries"] as $coun) {
                //we need to get country ID to save it to recipe_coutry table
                $country_generated = Country::where("name", $coun)->first();
                $recipe->countries()->attach($country_generated->id);
            }

            foreach ($food["ingredients"] as $ingr) {
                //we need to know if the ingredient is already in the DB if not, it is stored
                $ingredient_generated = Ingredient::where("name", $ingr[2])->first();
                if (!$ingredient_generated) {
                    $ingredient = new Ingredient;
                    $ingredient->name = $ingr[2];
                    $ingredient->save();
                }
                //actually filling the intermediate table ingredient_recipe (notice syntax in attach() method)
                $recipe->ingredients()->attach($ingredient->id, ["quantity" => $ingr[0], "measurement" => $ingr[1]]);
            }
        }
    }
}
