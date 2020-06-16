<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cpf');
            $table->date('birth_date');
            $table->integer('phone');
            $table->string('email')->nullable();
            $table->integer('realstateagent_id')->unsigned();
            $table->foreign('realstateagent_id')->references('id')->on('real_state_agents');
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
        Schema::drop('renters');
    }
}
