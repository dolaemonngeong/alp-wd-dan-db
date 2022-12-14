<?php

use App\Models\Position;
use App\Models\Villager;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Position::class);
            $table->foreignIdFor(Villager::class);
            $table->date("appointed_date");
            $table->date("resign_date");
            $table->enum('status_jabat', ['berjalan', 'selesai']);
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
        Schema::dropIfExists('structures');
    }
};
