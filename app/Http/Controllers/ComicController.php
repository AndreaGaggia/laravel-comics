<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Illustrator;
use App\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $writers = Writer::all();
        $illustrators = Illustrator::all();
        return view('admin.comics.create', compact('writers', 'illustrators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover' => 'required|image',
            'bg_img' => 'required|image',
            'price' => 'required',
            'on_sale_date' => 'required',
            'issue' => 'required',
            'writers' => 'required|exists:writers,id',
            'illustrators' => 'required|exists:illustrators,id',
        ]);

        $cover = Storage::put('comic_imgs', $request->cover);
        $bg_img = Storage::put('comic_imgs', $request->bg_img);
        $validated['cover'] = $cover;
        $validated['bg_img'] = $bg_img;

        Comic::create($validated);

        $last_comic = Comic::orderBy('id', 'desc')->first();
        $last_comic->writers()->attach($request->writers);
        $last_comic->illustrators()->attach($request->illustrators);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
