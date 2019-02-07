<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharityStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charity_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('charity_id');
            $table->boolean('draft')->default(0);
            $table->boolean('active')->default(0);
            $table->boolean('ban')->default(0);
            $table->boolean('done')->default(0);
            $table->text('reason')->nullable();
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
        Schema::dropIfExists('charity_statuses');
    }
}
