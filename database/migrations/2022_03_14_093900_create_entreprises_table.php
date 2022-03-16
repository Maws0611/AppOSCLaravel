<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nomEntreprise')->unique();
            $table->string('pageWeb');
            $table->date('dateCreation');
            $table->integer('nombreEmploye');
            $table->boolean('contratFormel');
            $table->boolean('organigrammeClaire');
            $table->boolean('dispositifFormation');
            $table->boolean('cotisationSocial');
            $table->enum('registreJuridique', ['EI', 'EURL', 'SNC', 'SA', 'SAS', 'SARL', 'GIE']);
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
        Schema::dropIfExists('entreprises');
    }
}
