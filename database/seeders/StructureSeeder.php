<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Villager;
use App\Models\Structure;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index=0;
        foreach(Position::all() as $p){
            foreach(Villager::all() as $v){
            if($index==0){
                Structure::create([
                    'position_id'=> $p->id,
                    'villager_id' => $v->id,
                    'appointed_date' => date('Y_m_d'),
                    'resign_date' => date('Y_m_d')
                ]);
            }else if($index==1){
                Structure::create([
                    'position_id' => $p->id,
                    'villager_id' => $v->id,
                    'appointed_date' => date('Y_m_d'),
                    'resign_date' => date('Y_m_d')
                ]);
            }else if($index==2){
                Structure::create([
                    'position_id' => $p->id,
                    'villager_id' => $v->id,
                    'appointed_date' => date('Y_m_d'),
                    'resign_date' => date('Y_m_d')
                ]);
            }else if($index==3){
                Structure::create([
                    'position_id' => $p->id,
                    'villager_id' => $v->id,
                    'appointed_date' => date('Y_m_d'),
                    'resign_date' => date('Y_m_d')
                ]);
            }
            $index++;
        }
        }
    }
}
