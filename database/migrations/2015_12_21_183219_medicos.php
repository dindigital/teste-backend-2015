<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('especialidade',100);
            $table->string('celular',45);
            $table->string('descricao',200);
            $table->string('foto',100);
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
        //
        Schema::drop('medicos');
    }
}
