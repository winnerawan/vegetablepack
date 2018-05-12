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
            $table->integer('village_id');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('contact')->nullable();
            $table->string('street')->nullable();
            $table->string('image')->nullable();
            $table->string('open')->nullable();
            $table->string('close')->nullable();
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
