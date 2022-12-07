<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("birth_place");
            $table->date("birth_date");
            $table->string("nik");
            $table->string("phone");
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->enum('role', ['pelajar', 'pekerja', 'tidak bekerja']);
            $table->enum('status', ['hidup', 'meninggal','pindah']);
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
        Schema::dropIfExists('villagers');
    }
};
