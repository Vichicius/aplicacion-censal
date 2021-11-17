<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre',150);

            $table->string('Primer Apellido',150);

            $table->string('Segundo Apellido',150);
            
            $table->date('Fecha de nacimiento');
            
            $table->unsignedBigInteger('padre')->nullable();
            $table->foreign('padre')->references('id')->on('personas');

            $table->unsignedBigInteger('madre')->nullable();
            $table->foreign('madre')->references('id')->on('personas');

            $table->unsignedBigInteger('domicilio')->nullable();
            $table->foreign('domicilio')->references('id')->on('domicilio');

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
        Schema::dropIfExists('personas');
    }
}
