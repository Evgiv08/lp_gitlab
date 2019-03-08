<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->string('full_name');
            $table->string('phone');
            $table->string('locality');
            $table->string('address')->nullable();
            $table->date('birth_date');
            $table->text('purpose');
            $table->text('about');
            $table->integer('category_id');
            $table->decimal('sum');
            $table->string('slug');
            $table->string('img_path')->nullable();
            $table->integer('status_id');
            $table->date('start_date')->nullable();
            $table->text('ban_reason')->nullable();
            $table->date('ban_date')->nullable();
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
        Schema::dropIfExists('charities');
    }
}
