<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enregistrement_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('travaux_a_faire');
            $table->string('date_necessite');
            $table->string('resultat')->nullable();
            $table->string('responsable');
            $table->string('date_ordre')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('fini')->nullable()->default(0);
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
