<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //atribuindo todos os valores da minha tabela na variavel $autors
         $genres = Genre::get();
        //resposta em json
        return \response()->json($genres);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new Genre;
        //requisao para criar novos autores
        $genre->literary_genre = $request->literary_genre;
        $genre->save();
        return \response()->json($genre);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscando no banco com a condicao where somente o que esta no paramentro
        $genre = Genre::where('id_genre', $id)->first();
        //resposta em json
        return \response()->json($genre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->literary_genre = $request->literary_genre;
        $genre->save();
        return \response()->json($genre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre-> delete();      
    }
}
