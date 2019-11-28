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
            $table->foreign('book_autor')->references('id_autor')->on('id_autor');
            $table->foreign('book_genre')->references('id_genre')->on('id_genre');
            $table->foreign('book_publisher')->references('id_publisher')->on('id_publisher');

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
