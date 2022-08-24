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
            $table->string('nama');
            $table->string('nim');
            $table->foreignId('id_leader')->nullable();
            $table->string('fakultas');
            $table->string('angkatan');
            $table->string('link_gdrive');
            $table->string('nickname')->nullable();
            $table->string('email');
            $table->string('hp');
            $table->string('id_game')->nullable();
            $table->string('gender');
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
