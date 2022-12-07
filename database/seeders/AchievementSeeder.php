<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Achievementcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index=0;

        foreach(Achievementcategory::all() as $ac){
            if($index==0){
                Achievement::create([
                    'name' => 'juara 1 lomba ftc',
                    'image' => 'achievement1.jpg',
                    'achievementcategory_id' => $ac->id,
                    'description' => 'desc 1',
                ]);
            }else if($index==1){
                Achievement::create([
                    'name' => 'juara harapan 3 lomba lo berharga',
                    'image' => 'achievement2.jpg',
                    'achievementcategory_id' => $ac->id,
                    'description' => 'desc 2',
                ]);
            }else if($index==2){
                Achievement::create([
                    'name' => 'juara 3 desa terbersih di jawa Timur',
                    'image' => 'achievement3.jpg',
                    'achievementcategory_id' => $ac->id,
                    'description' => 'desc 3',
                ]);
            }
            $index++;
        }
        
    }
}
