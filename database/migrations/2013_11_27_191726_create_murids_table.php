<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string("nis");
            $table->string("nama");
            $table->unsignedBigInteger("id_jurusan");
            $table->unsignedBigInteger("id_kelas");
            $table->timestamps();

            $table->foreign("id_jurusan")->references("id")->on("jurusans")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("id_kelas")->references("id")->on("kelas")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('murids');
    }
}
