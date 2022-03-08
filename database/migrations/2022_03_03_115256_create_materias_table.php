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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
<<<<<<< HEAD
            $table->bigInteger("niveleseducativo_id")->unsigned();
            $table->foreign("niveleseducativo_id")->references("id")->on("niveleseducativos")->onDelete("cascade");
=======
            $table->bigInteger("nivel_id")->unsigned();
            $table->foreign("nivel_id")->references("id")->on("nivels")->onDelete("cascade");
>>>>>>> 673be38eef4f4977425aed2ec7bd0cd666bd3a05
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
        Schema::dropIfExists('materias');
    }
};
