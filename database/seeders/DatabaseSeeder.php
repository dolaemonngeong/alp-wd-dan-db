<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GallerySeeder::class,
            UserSeeder::class,
            ReportSeeder::class,
            PositionSeeder::class,
            TemplateSeeder::class,
            OnlineLetterSeeder::class,
            AchievementCategorySeeder::class,
            AchievementSeeder::class,
            FinanceSeeder::class,
            VillagerSeeder::class,
            StructureSeeder::class,
            ComerSeeder::class,
        ]);   
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
