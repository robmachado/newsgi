<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('cbo', 50)->nullable();
            $table->string('department', 100);
            $table->boolean('active')->default(true);
            $table->longText('attibutions');
            $table->longText('necessary_skills');
            $table->longText('necessary_knowledge');
            $table->longText('necessary_training');
            $table->longText('necessary_experience');
            $table->string('required_schooling', 100);
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
        Schema::dropIfExists('roles');
    }
}
