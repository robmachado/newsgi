<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 100);
            $table->string('discription', 100);
            $table->string('unit', 100);
            $table->integer('interval')->defaul(12);
            $table->string('historic', 25);
            $table->tinyInteger('status')->defaul(1);
            $table->text('observations')->nullable();
            $table->date('calibration_date');
            $table->date('next_calibration_date');
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
        Schema::dropIfExists('instruments');
    }
}
