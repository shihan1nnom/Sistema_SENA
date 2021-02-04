<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 45);
            $table->string('apellidos ', 45);
            $table->string('documento', 45);
            $table->string('fotografia', 45);
            $table->unsignedBigInteger('ficha_id');
            $table->foreign('ficha_id')->references('id')->on('fichas');
            $table->softDeletes();
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
        Schema::dropIfExists('instructores');
    }
}
