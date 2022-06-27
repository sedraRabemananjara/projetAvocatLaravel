<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->id();
            $table->foreignId('enregistrement_id')->constrained();
            $table->string('travaux_a_faire');
            $table->Date('date_necessite');
            $table->string('resultat');
            $table->string('responsable');
            $table->string('date_ordre')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('fini')->default(false);
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
        Schema::dropIfExists('courses');
    }
};
