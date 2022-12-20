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
            'volume' => $faker->randomNumber(3, true),
            'unit' => 'kg',
            'date' => date('Y_m_d'),
            'price' => $faker->randomNumber(9, true),
            'total' => $faker->randomNumber(9, true)
        ]);

        Finance::factory()->create([
            'description' => 'ket 2',
            'unit' => 'pcs',
            'volume' => $faker->randomNumber(3, true),
            'date' => date('Y_m_d'),
            'price' => $faker->randomNumber(9, true),
            'total' => $faker->randomNumber(9, true)
        ]);
        
        Finance::factory()->create([
            'description' => 'ket 3',
            'volume' => $faker->randomNumber(3, true),
            'unit' => 'kg',
            'date' => date('Y_m_d'),
            'price' => $faker->randomNumber(9, true),
            'total' => $faker->randomNumber(9, true)
        ]);
        
        Finance::factory()->create([
            'description' => 'ket 4',
            'volume' => $faker->randomNumber(3, true),
            'unit' => 'liter',
            'date' => date('Y_m_d'),
            'price' => $faker->randomNumber(9, true),
            'total' => $faker->randomNumber(9, true)
        ]);
            
        
    }
}
