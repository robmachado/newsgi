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
            $table->bigInteger('department_id')->unsigned();
            $table->string('role_name', 100);
            $table->string('cbo', 50)->nullable();
            $table->boolean('active')->default(true);
            $table->longText('attributions');
            $table->longText('necessary_skills');
            $table->longText('necessary_knowledge');
            $table->longText('necessary_training');
            $table->longText('necessary_experience');
            $table->string('necessary_schooling', 100);
            $table->decimal('minimum_wage', 15, 2)->nullable();
            $table->decimal('maximum_wage', 15, 2)->nullable();
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
