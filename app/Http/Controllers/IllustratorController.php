<?php

namespace App\Http\Controllers;

use App\Illustrator;
use Illuminate\Http\Request;

class IllustratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $illustrators = Illustrator::all();
        return view('admin.illustrators.index', compact('illustrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.illustrators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:illustrators,name',
        ]);
        Illustrator::create($validated);
        return redirect()->route('admin.illustrators.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function show(Illustrator $illustrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Illustrator $illustrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Illustrator $illustrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Illustrator  $illustrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Illustrator $illustrator)
    {
        //
    }
}
