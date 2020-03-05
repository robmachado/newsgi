<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200);
            $table->text('description');
            $table->decimal('workload', 6,2);
            $table->date('realization_date');
            $table->string('registration', 100);
            $table->integer('participants')->default(0);
            $table->string('responsable', 200);
            $table->decimal('cost', 15, 2)->default(0);
            $table->decimail('learning', 6, 3)->default(0);
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
        Schema::dropIfExists('trainings');
    }
}
