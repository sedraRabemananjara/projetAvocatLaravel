<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

//use Staudenmeir\LaravelMigrationViews\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*DB::statement("
        CREATE VIEW views_overall_report AS
        (
            SELECT er.user_id as user_id, c.*, ag.*
                FROM 'enregistrements' er
                JOIN 'agendas' ag ON er.id=ag.enregistrement_id
                JOIN 'courses' c ON er.id=c.enregistrement_id
        )
        ");*/

        DB::statement($this->createView());
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }

    private function createView(): string
    {
        $sql=" CREATE VIEW view_enregistrement_course_agenda_byavocat AS (SELECT er.id as id_enregistrement , er.procedure as procedure,er.user_id  as user_id ,er.pour as client,c.date_necessite,  ag.* FROM agendas ag JOIN enregistrements er ON er.id=ag.enregistrement_id JOIN courses c ON er.id=c.enregistrement_id  where c.fini = 'f' ORDER BY ag.date_agenda DESC LIMIT 1)";
        
        return $sql;
        
    }
};
