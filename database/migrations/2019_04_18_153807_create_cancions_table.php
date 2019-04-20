<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('listas_id');
            $table->unsignedInteger('generos_id');
            $table->string('nombre');
            $table->string('interprete');
            $table->string('duracion');
            $table->timestamps();

            $table->foreign('listas_id')
                ->references('id')->on('listas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('generos_id')
                ->references('id')->on('generos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancions');
    }
}
