<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('form', 50);
            $table->integer('version');
            $table->string('responsible', 100);
            $table->string('filename', 300);
            $table->longText('historic');
            $table->string('origin', 100);
            $table->text('identification');
            $table->text('storage');
            $table->text('protection');
            $table->text('recovery');
            $table->text('retention');
            $table->text('discard');
            $table->text('discard');
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
        Schema::dropIfExists('registers');
    }
}
