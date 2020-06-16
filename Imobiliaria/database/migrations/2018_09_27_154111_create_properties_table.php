<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('address');
            $table->integer('number');
            $table->integer('owner_id')->unsigned();
            $table->integer('rent_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('rent_id')->references('id')->on('rents');
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
        Schema::drop('properties');
    }
}
