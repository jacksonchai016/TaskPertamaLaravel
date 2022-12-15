<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('no_buku')->nullable();
            $table->string('judul_buku')->nullable();
            $table->string('pengarang_buku')->nullable();
            $table->string('penerbit_buku')->nullable();
            $table->string('tahun_terbit')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bukus');
    }
}
