<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Category;
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

        foreach(Category::all() as $ac){
            if($index==0){
                Achievement::create([
                    'name' => 'juara 1 lomba ftc',
                    'image' => 'achievement/achievement1.jpg',
                    'category_id' => $ac->id,
                    'description' => 'desc 1',
                    'date_achievement' => date('Y_m_d'),
                ]);
            }else if($index==1){
                Achievement::create([
                    'name' => 'juara harapan 3 lomba lo berharga',
                    'image' => 'achievement/achievement2.jpg',
                    'category_id' => $ac->id,
                    'description' => 'desc 2',
                    'date_achievement' => date('Y_m_d'),
                ]);
            }else if($index==2){
                Achievement::create([
                    'name' => 'juara 3 desa terbersih di jawa Timur',
                    'image' => 'achievement/achievement3.jpg',
                    'category_id' => $ac->id,
                    'description' => 'desc 3',
                    'date_achievement' => date('Y_m_d'),
                ]);
            }
            $index++;
        }
        
    }
}
