<?php

namespace Database\Seeders;

use App\Models\Lettertype;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LetterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lettertype::factory()->create([
            'name' => 'tipe 1'
        ]);
        
        Lettertype::factory()->create([
           'name' => 'tipe 2'
        ]);

        Lettertype::factory()->create([
           'name' => 'tipe 3'
        ]);
    }
}
