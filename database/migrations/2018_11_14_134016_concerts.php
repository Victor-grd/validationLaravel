<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Concerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('lieu_id');
            $table->boolean('dispo');
            $table->timestamps();

            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');
            $table->foreign('lieu_id')->references('id')->on('lieus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('concerts');
    }
}
