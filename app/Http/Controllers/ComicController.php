<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(

            [
                'title' => 'required|max:50',
                'description' => 'required',
                'price' => 'required|max:7',
                'series' => 'required|max:50',
                'sale_date' => 'required|max:10',
                'type' => 'required|max:20',
            ]

        );

        $new_record = new Comic();
        $new_record->fill($data);
        $new_record->save();

        return redirect()->route('home')->with('success', "You have successfully added: $new_record->title");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comic', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $request->validate(

            [
                'title' => 'required|max:50',
                'description' => 'required',
                'price' => 'required|max:7',
                'series' => 'required|max:50',
                'sale_date' => 'required|max:10',
                'type' => 'required|max:20',
            ]

        );

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id)->with('success', "You have successfully modified: $comic->title");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('home')->with('success', "You have successfully deleted: $comic->title");
    }
}
