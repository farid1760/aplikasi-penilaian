<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_mapel');
            $table->unsignedBigInteger('id_guru');
            $table->timestamps();

            $table->foreign('id_kelas')->references('id')->on('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_mapel')->references('id')->on('mapels')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_guru')->references('id')->on('gurus')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajarans');
    }
}
