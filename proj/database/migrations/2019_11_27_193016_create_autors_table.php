<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('autor_name', 30);
            $table->date('date_birth', dd-mm-yyyy);
            $table->enum('sex_genre',['Female', 'Male', 'other'] );
            $table->string('nationality', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autors');
    }
}
