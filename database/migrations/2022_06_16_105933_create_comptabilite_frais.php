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
    /* 
    $ComptabiliteFrais = new ComptabiliteFrais();
    $ComptabiliteFrais->idEnregistrement=$request->input('idEnregistrement');
    $ComptabiliteFrais->coutActes=$request->input('coutActes');
    $ComptabiliteFrais->fraisProcedure=$request->input('fraisProcedure');
    $ComptabiliteFrais->date=$request->input('date');
    $ComptabiliteFrais->entite=$request->input('entite');
    $ComptabiliteFrais->especeRecu=$request->input('especeRecu');
    $ComptabiliteFrais->motif=$request->input('motif');
    $ComptabiliteFrais->remarque=$request->input('remarque'); */
    {
        Schema::create('comptabilite_frais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enregistrement_id');
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
        Schema::dropIfExists('comptabilite_frais');
    }
};
