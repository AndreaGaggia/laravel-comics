<?php

namespace App\Http\Controllers;

use App\Comic;

class PagesController extends Controller
{
    public function home()
    {
        $comics = Comic::all();
        return view('guests.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('guests.show', compact('comic'));
    }
}
