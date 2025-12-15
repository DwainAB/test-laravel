<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function shox($id): string{
        return "Article n°$id.";
    }
}
