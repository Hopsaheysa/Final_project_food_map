<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function show($id)
    {
        $book = Recipe::findOrFail($id);

        return view('books.show', compact('book'));
    }

}
