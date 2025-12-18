<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'articles' => Article::all(),
            'name' => 'Dwain'
        ]);
    }
}
