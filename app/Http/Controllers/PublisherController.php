<?php

namespace App\Http\Controllers;
use App\Models\Publisher;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //atribuindo todos os valores da minha tabela na variavel $autors
        $publishers = Publisher::get();
        //resposta em json
        return \response()->json($publishers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publisher = new Publisher;
        //requisao para criar novos autores
        $publisher->publisher_name = $request->publisher_name;
        $publisher->save();
        return \response()->json($publisher);
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
                $publisher = Publisher::where('id_publisher', $id)->first();
                //resposta em json
                return \response()->json($publisher);
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
        $publisher = Publisher::find($id);
        $publisher->publisher_name = $request->publisher_name;
        $publisher->save();
        return \response()->json($publisher);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        $publisher->delete();
    }
}
