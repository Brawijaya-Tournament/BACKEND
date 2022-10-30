<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nim')->unique()->nullable();
            $table->foreignId('id_leader')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('link_gdrive')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->string('id_game')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('players');
    }
}
