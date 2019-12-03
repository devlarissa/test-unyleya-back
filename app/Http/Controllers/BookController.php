<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //atribuindo todos os valores da minha tabela na variavel $autors
                $books = Book::get();
                //resposta em json
                return \response()->json($books);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        //requisao para criar novos autores
        $book->book_title = $request->book_title;
        $book->release_year = $request->release_year;
        $book->id_genre = $request->id_genre;
        $book->id_publisher = $request->id_publisher;
        $book->id_autor = $request->id_autor;
        $book->save();
        return \response()->json($book);
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
        $book = Book
        ::where('id_book', $id)->first();
        //resposta em json
        return \response()->json($book);
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
        $book = Book::find($id);
        //requisao para criar novos autores
        $book->book_title = $request->book_title;
        $book->release_year = $request->release_year;
        $book->id_genre = $request->id_genre;
        $book->id_publisher = $request->id_publisher;
        $book->id_autor = $request->id_autor;
        $book->save();
        return \response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}
