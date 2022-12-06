<?php

use App\Models\User;
use App\Models\Lettertype;
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
        Schema::create('onlineletters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("nik");
            $table->string("email");
            $table->foreignIdFor(Lettertype::class);
            $table->string("message");
            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('onlineletters');
    }
};
