<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function indexProfile() {
       

        $user = auth()->user();
        return view('auth.profile', compact("user"));
    }

}
