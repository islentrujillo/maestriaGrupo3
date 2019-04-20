<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('clientes_id');
            $table->unsignedInteger('estados_id');
            $table->string('nombre');            
            $table->timestamps();

            $table->foreign('clientes_id')
                ->references('id')->on('clientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('estados_id')
                ->references('id')->on('estados')
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
        Schema::dropIfExists('listas');
    }
}
