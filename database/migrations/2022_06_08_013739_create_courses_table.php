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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('idCourse');
            $table->unsignedInteger('idEnregistrement');
            $table->foreign('idEnregistrement')->references('id')->on('enregistrements')->onDelete('cascade');
            $table->string('TAF');
            $table->timestamp('dateTimeCourse')->useCurrent();
            $table->text('resultat');
            $table->string('responsable');
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
