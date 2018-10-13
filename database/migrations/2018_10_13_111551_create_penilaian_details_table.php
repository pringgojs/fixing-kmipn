<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaianDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penilaian_id')->unsigned();
            $table->foreign('penilaian_id')->references('id')->on('penilaians');
            $table->integer('indikator_id')->unsigned();
            $table->foreign('indikator_id')->references('id')->on('indikators');
            $table->integer('skor')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_details');
    }
}
