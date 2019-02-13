<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('message');
            $table->string('armenia');
            $table->string('gerogia');
            $table->string('iran');
            $table->string('kyrgyzstan');
            $table->string('kazakhstan');
            $table->string('turkmenistan');
            $table->string('tajikistan');
            $table->string('mongolia');
            $table->string('uzbekistan');
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
        Schema::dropIfExists('messages');
    }
}
