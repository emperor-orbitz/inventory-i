<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;

class Dashboard extends Controller
{

    public function index()
    {
        //load list of categories
        $categories = Category::get();
        $item_count = Item::count('id', 1);
        $latest =  Item::latest('created_at')->first();

        return view('auth.dashboard', ['categories' => $categories, 'latest' => $latest, 'item_count' => $item_count]);
    }
}
