<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks_info', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('charity_id');
            $table->string('bank_title');
            $table->string('account_number');
            $table->string('mfo');
            $table->string('inn');

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
        Schema::dropIfExists('banks_info');
    }
}
