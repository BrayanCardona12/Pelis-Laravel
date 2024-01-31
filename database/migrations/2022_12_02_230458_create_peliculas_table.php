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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string("Poster");
            $table->string("Nombre");
            $table->date("Festreno");
            $table->string("Genero");
            $table->string("Director");
            $table->text("Sinopsis");
            $table->bigInteger("vBoleta");
            $table->string("ColorF");
            $table->string("ColorT");
            $table->string("ColorFDT");
            $table->string("ColorTN");
            $table->string("ColorBTN");

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
        Schema::dropIfExists('peliculas');
    }
};
