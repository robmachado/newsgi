<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('document_type_id')->unsigned();
            $table->string('code', 10)->unique();
            $table->string('title', 100);
            $table->integer('version');
            $table->string('responsible', 100);
            $table->date('revision_date');
            $table->tinyInteger('status')->default(0);
            $table->longText('historic');
            $table->string('filename', 300)->nullable();
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
        Schema::dropIfExists('documents');
    }
}
