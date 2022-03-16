<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistreCommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registre_commerces', function (Blueprint $table) {
            $table->id();
            $table->string('prenomRepondant', 20);
            $table->string('nomRepondant', 20);
            $table->string('emailRepondant', 50)->unique();
            $table->integer('telephoneRepondant')->unique();
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
        Schema::dropIfExists('registre_commerces');
    }
}
