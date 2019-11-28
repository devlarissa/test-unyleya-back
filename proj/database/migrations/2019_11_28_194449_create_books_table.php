<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id_book');
            $table->string('books_title', 30);
            $table->year('release_year');
            $table->unsignedBigInteger('book_autor');
            $table->unsignedBigInteger('book_genre');
            $table->unsignedBigInteger('book_publisher');
            $table->foreign('book_autor')->references('id_autor')->on('autors');
            $table->foreign('book_genre')->references('id_genre')->on('genres');
            $table->foreign('book_publisher')->references('id_publisher')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
