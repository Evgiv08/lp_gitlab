<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharityDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charity_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('charity_id');
            $table->string('title')->nullable();
            $table->string('file_path');
            $table->timestamps();

            $table->foreign('charity_id')
                ->references('id')->on('charities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charity_documents');
    }
}
