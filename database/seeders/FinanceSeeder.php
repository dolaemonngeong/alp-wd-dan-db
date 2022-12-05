<?php

namespace Database\Seeders;

use App\Models\Finance;
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
        $index=0;
        foreach(Finance::all() as $finance){
            if($index==0){
                Finance::factory()->create([
                    'description' => 'ket 1'
                ]);
            }else if($index==1){
                Finance::factory()->create([
                    'description' => 'ket 2'
                ]);
            }else if($index==2){
                Finance::factory()->create([
                    'description' => 'ket 3'
                ]);
            }else if($index==3){
                Finance::factory()->create([
                    'description' => 'ket 4'
                ]);
            }
        }
    }
}
