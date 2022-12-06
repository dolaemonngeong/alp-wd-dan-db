<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievementcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AchievementCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievementcategory::factory()->create([
            'name' => 'olahraga'
        ]);
        
        Achievementcategory::factory()->create([
           'name' => 'cerdas cermat'
        ]);
    }
}
