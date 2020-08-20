<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('birth')->nullable();
            $table->integer('age');
            $table->string('site')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('degree')->nullable();
            $table->string('country');
            $table->string('city');
            $table->longText('h_desc');
            $table->longText('m_desc')->nullable();
            $table->longText('l_desc');
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
        Schema::dropIfExists('abouts');
    }
}
