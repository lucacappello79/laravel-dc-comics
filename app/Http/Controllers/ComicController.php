<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('comics/index', compact('comics'));
        // return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);
        $formData = $request->all();

        $newComic = new Comic();
        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formData = $request->all();
        $comic->update($formData);
        // in teoria il save dovrebbe essere automatico ma alcune versioni di laravel lo vogliono
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    private function validation($request)
    {

        $formData = $request->all();

        $validator = Validator::make($formData, [

            'title' => 'required|max:100|min:6',
            'thumb' => 'required|max:255',
            'type' => 'required|max:100',
            'series' => 'nullable|max:255',
            'price' => 'required|max:6',
            'description' => 'required|min:40',

        ], [

            'title.required' => "E' necessario inserire un titolo",
            'title.max' => 'Il titolo non deve superare 100 caratteri',
            'title.min' => 'Il titolo deve avere un minimo di 6 caratteri',
            'thumb.required' => "E'necessario indicare un link dell' immagine",
            'thumb.max' => "Il link dell'immagine non deve superare 255 caratteri",
            'type.required' => "E' necessario inserire la tipologia del fumetto",
            // 'type.max' => "La tipologia non deve superare 100 caratteri",
            'type.max' => "La tipologia non deve superare :max caratteri",
            // 'series.max' => 'La serie non deve superare 255 caratteri',
            'series.max' => 'La serie non deve superare :max caratteri',
            'price.required' => "E'necessario inserire un prezzo",
            'price.max' => 'Il prezzo non deve superare 6 caratteri',
            'description.required' => "E' richiesta una descrizione",
            'description.max' => 'La descrizione deve avere un minimo di 40 caratteri',

        ])->validate();

        return $validator;
    }
}
