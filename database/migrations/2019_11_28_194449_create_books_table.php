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
            $table->string('book_title', 30);
            $table->year('release_year');
            $table->unsignedBigInteger('id_autor');
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_publisher');
            $table->foreign('id_autor')->references('id_autor')->on('autors');
            $table->foreign('id_genre')->references('id_genre')->on('genres');
            $table->foreign('id_publisher')->references('id_publisher')->on('publishers');
            $table->timestamps();
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
