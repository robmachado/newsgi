<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->string('name', 100);
            $table->string('surname', 200);
            $table->string('gender', 1);
            $table->date('birth_date');
            $table->string('naturalness', 200);
            $table->string('nationality', 200);
            $table->string('identification', 200);
            $table->string('cfp', 11);
            $table->string('work_card', 100);
            $table->string('pis', 100);
            $table->string('driving_license', 100)->nullable();
            $table->string('marital_status', 1);
            $table->string('address', 300);
            $table->string('number', 50);
            $table->string('complement', 200)->nullable();
            $table->string('neighborhood', 150);
            $table->string('city', 200);
            $table->string('state', 2);
            $table->string('cep', 8);
            $table->string('fone', 100)->nullable();
            $table->string('cel', 100)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('spouse_name', 250)->nullable();
            $table->integer('number_of_children')->default(0);
            $table->string('blood_type', 4);
            $table->longText('allergies')->nullable();
            $table->string('schooling', 100);
            $table->string('graduation', 200);
            $table->string('schooling_register', 300);
            $table->string('photo', 200)->nullable();
            $table->date('effective_date');
            $table->date('dismissal_date')->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('employees');
    }
}
