<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comic;
use App\Serie;

class PagesController extends Controller
{
    public function home()
    {
        $comics = Comic::all();
        $articles = Article::all();
        $series = Serie::all();
        return view('guests.index', compact('comics', 'articles', 'series'));
    }

    public function show(Comic $comic)
    {
        return view('guests.show', compact('comic'));
    }
}
