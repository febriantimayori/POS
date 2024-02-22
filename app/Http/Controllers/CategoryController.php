<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage()
    {
        return view('category.food-beverage')
        ->with ('judul','List of Food Beverages 🥗🍶');
    }

    public function beautyHealth()
    {
        return view('category.beauty-health')
        ->with ('judul','List of Beauty Health 🥼🩺');
    }

    public function homeCare()
    {
        return view('category.home-care')
        ->with ('judul','List of Home Care 🏡');
    }

    public function babyKid()
    {
        return view('category.baby-kid')
        ->with ('judul','List of Baby Kid 🤱🏻');
    }
}
