<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comic;

class PagesController extends Controller
{
    public function home()
    {
        $comics = Comic::all();
        $articles = Article::all();
        return view('guests.index', compact('comics', 'articles'));
    }

    public function show(Comic $comic)
    {
        return view('guests.show', compact('comic'));
    }
}
