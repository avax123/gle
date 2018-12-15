<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicCategory extends Controller
{
    public function show()
    {
        return view('layouts.products-index', [
            'categories' => Category::orderBy('id', 'DESC')->where('published', '=', '1')->paginate(5),
        ]);
    }
}
