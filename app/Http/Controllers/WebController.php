<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('article', compact('article'));
    }
}
