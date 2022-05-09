<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Immobiliers', function (Blueprint $table) {
            $table->id();
            $table->integer('surface_totale');
            $table->integer('surface_habitable')->nullable();
            $table->integer('chambre');
            $table->integer('salon');
            $table->string('category');
            $table->integer('salle_de_bain');
            $table->integer('age_de_bien');
            $table->integer('nbr_etage')->nullable();
            $table->integer('etage')->nullable();
            $table->string('supp')->nullable();
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
        Schema::dropIfExists('Immobiliers');
    }
};
