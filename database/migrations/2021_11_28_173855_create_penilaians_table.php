<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_murid');
            $table->unsignedBigInteger('id_pengajaran');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('id_murid')->references('id')->on('murids')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_pengajaran')->references('id')->on('pengajarans')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaians');
    }
}
