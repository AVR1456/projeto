<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealStateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_state_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->integer('real_state_id')->unsigned();
            $table->foreign('real_state_id')->references('id')->on('real_states');
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
        Schema::drop('real_state_agents');
    }
}
