<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Report;
use Faker\Factory;
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
        foreach(User::all() as $user){
            if($index==0){
                Report::factory()->create([
                    'user_id' => $user->id,
                    'name' => $fakerID->name,
                    'description' => 'ket 1'
                ]);
            }else if($index==1){
                Report::factory()->create([
                    'user_id' => $user->id,
                    'name' => $fakerID->name,
                    'description' => 'ket 2'
                ]);
            }else if($index==2){
                Report::factory()->create([
                    'user_id' => $user->id,
                    'name' => $fakerID->name,
                    'description' => 'ket 3'
                ]);
            }else if($index==3){
                User::factory()->create([
                    'user_id' => $user->id,
                    'name' => $fakerID->name,
                    'description' => 'ket 4'
                ]);
            }
        }
        
    }
}
