<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_id');
            $table->integer('zone_id');
            $table->integer('district_id');
            $table->integer('village_id');
            $table->string('rt');
            $table->string('rw');
            $table->string('name');
            $table->string('description');
            $table->string('contact');
            $table->string('street');
            $table->string('image');
            $table->string('open');
            $table->string('close');
            $table->boolean('is_active');
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
        Schema::dropIfExists('stores');
    }
}
