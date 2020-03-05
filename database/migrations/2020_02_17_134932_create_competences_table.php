<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employe_id')->unsigned();
            $table->longText('necessary_skills');
            $table->longText('skills');
            $table->longText('necessary_knowledge');
            $table->longText('knowledge');
            $table->longText('necessary_training');
            $table->longText('training');
            $table->longText('necessary_experience');
            $table->longText('experience');
            $table->string('necessary_schooling', 100);
            $table->string('schooling', 100);
            $table->text('conclusion');
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
        Schema::dropIfExists('competences');
    }
}
