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
        /*Schema::create('view_avoir_charge_fixes', function (Blueprint $table) {
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
        DB::statement("DROP VIEW view_avoir_charge_fixe");
    }
    private function createView(): string
    {
        $sql = " CREATE VIEW view_avoir_charge_fixe AS ( select sum(montant) as charge_fixe from charges)";
        return $sql;
    }
};
