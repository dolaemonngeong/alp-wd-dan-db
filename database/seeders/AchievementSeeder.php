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
                    'achievementcategory_id' => $ac->id,
                ]);
            }else if($index==1){
                Achievement::create([
                    'name' => 'juara harapan 2 lomba lo berharga',
                    'achievementcategory_id' => $ac->id,
                ]);
            }else if($index==2){
                Achievement::create([
                    'name' => 'juara 3 desa tersersih di jawa Timur',
                    'achievementcategory_id' => $ac->id,
                ]);
            }
            $index++;
        }
        
    }
}
