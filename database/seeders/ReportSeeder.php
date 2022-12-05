<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID=Factory::create('id_ID');

        $index=0;
        // foreach(Report::all() as $report){
        //     if($index==0){
        //         Report::factory()->create([
        //             'contact' => $fakerID->phoneNumber,
        //             'description' => 'ket 1'
        //         ]);
        //     }else if($index==1){
        //         Report::factory()->create([
        //             'contact' => $fakerID->phoneNumber,
        //             'description' => 'ket 2'
        //         ]);
        //     }else if($index==2){
        //         Report::factory()->create([
        //             'contact' => $fakerID->phoneNumber,
        //             'description' => 'ket 3'
        //         ]);
        //     }else if($index==3){
        //         Report::factory()->create([
        //             'contact' => $fakerID->phoneNumber,
        //             'description' => 'ket 4'
        //         ]);
        //     }
        // }
        
    }
}
