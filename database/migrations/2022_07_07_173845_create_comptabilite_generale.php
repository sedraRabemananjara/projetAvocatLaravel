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
        Schema::create('comptabilite_generale', function (Blueprint $table) {
            $table->id();
            $table->integer('id_comptabilite_honoraires');
            $table->foreign('id_comptabilite_honoraires')->references('id')->on('comptabilite_honoraire');
            $table->integer('id_comptabilite_frais');
            $table->foreign('id_comptabilite_frais')->references('id')->on('comptabilite_frais');
            $table->double('especeRecu');
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
        Schema::dropIfExists('comptabilite_generale');
    }
};
