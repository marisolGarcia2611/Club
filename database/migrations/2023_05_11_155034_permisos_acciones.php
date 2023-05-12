<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermisosAcciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuario_acciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idacciones');
            $table->timestamps();
            $table->foreign('idusuario')->references('id')->on('users');
            $table->foreign('idacciones')->references('id')->on('tblacciones');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblusuario_acciones');
    }
}
