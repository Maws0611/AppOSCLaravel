<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nineas', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroNinea')->unique();
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
        Schema::dropIfExists('nineas');
    }
}
