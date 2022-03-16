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
            $table->string('nomSiege', 20)->unique();
            $table->unsignedBigInteger('quartier_id');

            $table->foreign('quartier_id')
                  ->references('id')
                  ->on('quartiers');
            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')
                  ->references('id')
                  ->on('entreprises');
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
        Schema::dropIfExists('sieges');
    }
}
