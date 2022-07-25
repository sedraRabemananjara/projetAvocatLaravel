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
        /*Schema::create('view_voir_chiffre_affaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW view_voir_chiffreAffaire");
    }
    private function createView(): string
    {
        $sql = " CREATE VIEW view_voir_chiffreAffaire AS (select sum(ch.montant) as honoraire,sum(cf.montant) as frais ,sum(ch.montant)+sum(cf.montant) as gain from comptabilite_honoraires ch join comptabilite_frais cf on ch.id=cf.id)";
        return $sql;
    }
};
