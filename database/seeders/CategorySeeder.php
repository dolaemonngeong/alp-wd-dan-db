<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'olahraga'
        ]);
        
        Category::factory()->create([
           'name' => 'cerdas cermat'
        ]);

        Category::factory()->create([
           'name' => 'lingkungan'
        ]);
    }
}
