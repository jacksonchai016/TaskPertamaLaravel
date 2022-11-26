<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ids', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_role_id')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_ids');
    }
}
