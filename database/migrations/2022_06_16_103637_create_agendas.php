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
            $table->id();
            $table->foreignId('enregistrement_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('type_renvoi_id')->constrained()->onUpdate('cascade');
            $table->string('motif');
            $table->string('espace_conclusion')->nullable();
            $table->datetime('date_agenda');
            $table->string('salle');
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
