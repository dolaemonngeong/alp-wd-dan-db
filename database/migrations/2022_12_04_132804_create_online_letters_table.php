<?php

use App\Models\User;
use App\Models\Template;
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
            $table->string("email");
            $table->string("phone");
            $table->foreignIdFor(Template::class);
<<<<<<< Updated upstream:database/migrations/2022_12_04_132804_create_online_letters_table.php
            $table->string("file_letter");
            $table->string("message");
            $table->enum('proses', ['menunggu', 'dalam proses','selesai']);
=======
            $table->string("file");
            $table->string("message")->nullable();
            $table->enum('proses', ['menunggu', 'selesai'])->default('menunggu');
>>>>>>> Stashed changes:database/migrations/2022_12_16_111033_create_letters_table.php
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
