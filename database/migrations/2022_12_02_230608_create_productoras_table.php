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
        Schema::create('productoras', function (Blueprint $table) {
            $table->id();

            $table->string("Logo");
            $table->string("Nombre");
            $table->text("Descripcion");
            $table->string("ColorF");
            $table->string("ColorT");
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
        Schema::dropIfExists('productoras');
    }
};
