<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //atribuindo todos os valores da minha tabela na variavel $autors
        $autors = Autor::get();
        //resposta em json
        return \response()->json($autors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = new Autor;
        //requisao para criar novos autores
        $autor->autor_name = $request->autor_name;
        $autor->date_birth = $request->date_birth;
        $autor->sex_genre = $request->sex_genre;
        $autor->nationality = $request->nationality;
        $autor->save();
        return \response()->json($autor);


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
        $autor = Autor::where('id_autor', $id)->first();
        //resposta em json
        return \response()->json($autor);
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
        $autor = Autor::find($id);
        $autor->autor_name = $request->autor_name;
        $autor->date_birth = $request->date_birth;
        $autor->sex_genre = $request->sex_genre;
        $autor->nationality = $request->nationality;
        $autor->save();
        return \response()->json($autor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();
    }
}
