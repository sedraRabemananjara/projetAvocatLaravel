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
        Schema::create('avocats', function (Blueprint $table) {
            $table->id('idAvocat');
            $table->string('mdp');
            $table->string('nom');
            $table->string('prenom');
            $table->string('mailAvocat');
            $table->string('addresseAvocat');
            $table->string('contactAvocat');
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
        Schema::dropIfExists('avocats');
    }
};
