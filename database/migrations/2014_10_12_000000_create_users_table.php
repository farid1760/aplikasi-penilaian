<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'guru', 'murid']);
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->unsignedBigInteger('profile_guru')->nullable();
            $table->unsignedBigInteger('profile_murid')->nullable();
            $table->timestamps();

            $table->foreign("profile_guru")->references("id")->on("gurus")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("profile_murid")->references("id")->on("murids")->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
