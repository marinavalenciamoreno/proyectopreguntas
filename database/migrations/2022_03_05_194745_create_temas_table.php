<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_materia")->unsigned();
            $table->string("numero");
            $table->string("nombre");
            $table->foreign("id_materia")->references("id")->on("materias");
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
        Schema::dropIfExists('temas');
    }
};
