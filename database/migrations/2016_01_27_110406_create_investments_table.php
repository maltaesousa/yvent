<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ancien_numero');
            $table->bigInteger('numero')->unique();
            $table->string('priorite_politique');
            $table->string('remarques');
            $table->string('chef_de_file');
            $table->string('type_investissement');
            $table->string('objet');
            $table->string('description');
            $table->string('fiche');
            $table->date('conseil_communal');
            $table->float('credits_votes');
            $table->float('credits_a_voter');
            $table->float('montant_2017');
            $table->float('montant_2018');
            $table->float('montant_2019');
            $table->float('montant_2020');
            $table->float('montant_2021');
            $table->float('montant_2022');
            $table->float('montant_2023');
            $table->float('montant_2024');
            $table->float('montant_2025');
            $table->float('montant_2026');
            $table->float('montant_annees_suivantes');
            $table->boolean('sports');
            $table->boolean('sg');
            $table->boolean('ste');
            $table->boolean('aggloy');
            $table->boolean('sdis');
            $table->boolean('jecos');
            $table->boolean('culture');
            $table->boolean('ssp');
            $table->boolean('finances');
            $table->boolean('sey');
            $table->boolean('urbat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
