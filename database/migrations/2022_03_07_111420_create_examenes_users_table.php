<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes_users', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_realización");
            $table->integer("num_respuestas_correctas")->unsigned();
            $table->bigInteger("id_examen")->unsigned();
            $table->bigInteger("id_usuario")->unsigned();
            $table->foreign("id_examen")->references("id")->on("examens")->onDelete("cascade");
            $table->foreign("id_usuario")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('examenes_users');
    }
};
