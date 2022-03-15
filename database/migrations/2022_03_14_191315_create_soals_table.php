<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('paket_soal_id')->unsigned();
            $table->bigInteger('mapel_id')->unsigned();
            $table->text('soal');
            $table->text('jawaban');

            $table->foreign('paket_soal_id')->references('id')
            ->on('paket_soals')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('mapel_id')->references('id')
            ->on('mapels')->onUpdate('cascade')
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
        Schema::dropIfExists('soals');
    }
}
