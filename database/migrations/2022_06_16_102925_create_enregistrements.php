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
        Schema::create('enregistrements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('pour');
            $table->string('contre');
            $table->foreignId('nature_id')->constrained()->onUpdate('cascade');
            $table->foreignId('juridiction_id')->constrained()->onUpdate('cascade');
            $table->foreignId('section_juridiction_id')->nullable();
            $table->string('procedure');
            $table->string('lieu')->nullable();
            $table->string('adresse_client')->nullable();
            $table->string('telephone_client')->nullable();
            $table->string('email_client')->nullable();
            $table->string('email_interlocuteur')->nullable();
            $table->string('telephone_interlocuteur')->nullable();
            $table->date('date_delais_paiement')->nullable();
            $table->double('montant_honoraire')->nullable();
            $table->boolean('envoi_mail_automatique')->nullable()->default(1);
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
        Schema::dropIfExists('enregistrements');
    }
};
