<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PublicCategory extends Controller
{
    public function show()
    {
        return view('layouts.products-index', [
            'categories' => Category::where('published' , '=', '1')->paginate(5)
        ]);
    }
}
