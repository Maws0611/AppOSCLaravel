<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordonneesGPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordonnees_g_p_s', function (Blueprint $table) {
            $table->id();
            $table->float('latitude');
            $table->float('longitudes');
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
        Schema::dropIfExists('coordonnees_g_p_s');
    }
}
