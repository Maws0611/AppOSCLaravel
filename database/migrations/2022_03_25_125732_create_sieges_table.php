<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sieges', function (Blueprint $table) {
            $table->id();
            $table->string('nomSiege')->unique();

            $table->integer('commune_id')->unsigned();
            $table->foreign('commune_id')->references('id')->on('Commune');

            $table->integer('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('Entreprise');
            
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
        Schema::drop('sieges');
    }
}
