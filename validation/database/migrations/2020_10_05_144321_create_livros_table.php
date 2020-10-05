<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{   
    Schema::create('livros', function (Blueprint $table) {
        $table->increments('id');
        $table->string('titulo');
        $table->string('autor');
        $table->string('edicao');
        $table->string('isbn');
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
        Schema::dropIfExists('livros');
    }
}
