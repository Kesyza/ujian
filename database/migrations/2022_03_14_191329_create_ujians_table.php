<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna_id')->unsigned();
            $table->bigInteger('soal_id')->unsigned();
            $table->timestamp('waktu_mulai');
            $table->time('waktu_ujian');
            $table->text('hasil');
            $table->double('nilai');

            $table->foreign('pengguna_id')->references('id')
            ->on('penggunas')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('soal_id')->references('id')
            ->on('soals')->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('ujians');
    }
}
