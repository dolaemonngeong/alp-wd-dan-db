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
        $index=0;
        foreach(Position::all() as $position){
            if($index==0){
                Position::factory()->create([
                    'name' => 'ketua'
                ]);
            }else if($index==1){
                Position::factory()->create([
                    'name' => 'wakil ketua'
                ]);
            }else if($index==2){
                Position::factory()->create([
                    'name' => 'bendahara'
                ]);
            }
        }
    }
}
