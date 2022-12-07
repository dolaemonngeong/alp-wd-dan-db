<?php

namespace Database\Seeders;

use App\Models\Finance;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker=Factory::create();
        
            Finance::factory()->create([
                'description' => 'ket 1',
                // 'budget' => '572700000',
                // 'percentage' => 47.32,
                'budget' => $faker->randomNumber(9, true),
                'percentage' => $faker->randomFloat(2, 10, 30)
            ]);

            Finance::factory()->create([
                'description' => 'ket 2',
                // 'budget' => '472000000',
                // 'percentage' => 39.00,
                'budget' => $faker->randomNumber(9, true),
                'percentage' => $faker->randomFloat(2, 10, 30)
            ]);
            
            Finance::factory()->create([
                'description' => 'ket 3',
                // 'budget' => '81600',
                // 'percentage' => 6.74,
                'budget' => $faker->randomNumber(9, true),
                'percentage' => $faker->randomFloat(2, 10, 30)
            ]);
            
            Finance::factory()->create([
                'description' => 'ket 4',
                // 'budget' => '82000',
                // 'percentage' => 6.78,
                'budget' => $faker->randomNumber(9, true),
                'percentage' => $faker->randomFloat(2, 10, 30)
            ]);
            
        
    }
}
