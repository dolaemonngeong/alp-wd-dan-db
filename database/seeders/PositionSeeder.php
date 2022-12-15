<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Position::factory()->create([
            'name' => 'ketua',
            'description' => 'desc for ketua'
        ]);
        
        Position::factory()->create([
           'name' => 'wakil ketua',
           'description' => 'desc for wakil ketua'
        ]);
        
        Position::factory()->create([
            'name' => 'bendahara',
            'description' => 'desc for bendahara'
        ]);
            
        }
    }
