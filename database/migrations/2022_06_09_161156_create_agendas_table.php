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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id('idAgenda');
            $table->unsignedInteger('idEnregistrement');
            $table->foreign('idEnregistrement')->references('id')->on('enregistrements')->onDelete('cascade');
            $table->text('renvoi');
            $table->text('motif');
            $table->text('espaceConclusion');
            $table->unsignedInteger('idCourse');
            $table->foreign('idCourse')->references('idCourse')->on('courses')->onDelete('cascade');
            $table->timestamp('dateTimeAgenda')->useCurrent();
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
        Schema::dropIfExists('agendas');
    }
};
