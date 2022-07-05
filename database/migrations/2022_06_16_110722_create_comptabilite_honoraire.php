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
        Schema::create('comptabilite_honoraires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enregistrement_id')->constrained();
            $table->string('motif');
            $table->double('montant');
            $table->datetime('date_paiement')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('paye_par');
            $table->string('recu_par');
            $table->string('remarque')->nullable();
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
        Schema::dropIfExists('comptabilite_honoraire');
    }
};
