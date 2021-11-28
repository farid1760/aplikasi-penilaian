<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->integer("nip");
            $table->string("nama");
            $table->unsignedBigInteger("id_jurusan");
            $table->unsignedBigInteger("id_mapel");
            $table->timestamps();

            $table->foreign("id_jurusan")->references("id")->on("jurusans")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("id_mapel")->references("id")->on("mapels")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
