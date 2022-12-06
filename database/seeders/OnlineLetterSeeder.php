<?php

namespace Database\Seeders;

use index;
use Faker\Factory;
use App\Models\User;
use App\Models\Lettertype;
use App\Models\Onlineletter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OnlineLetterSeeder extends Seeder
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
        foreach(Lettertype::all() as $lt){
            foreach(User::all() as $u){
            if($index==0){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'nik' => $fakerID->nik,
                    'email' => $fakerID->email,
                    'lettertype_id'=> $lt->id,
                    'message' => 'message 1',
                    'user_id' => $u->id,
                ]);
            }else if($index==1){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'nik' => $fakerID->nik,
                    'email' => $fakerID->email,
                    'lettertype_id' => $lt->id,
                    'message' => 'message 2',
                    'user_id' => $u->id,
                ]);
            }else if($index==2){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'nik' => $fakerID->nik,
                    'email' => $fakerID->email,
                    'lettertype_id' => $lt->id,
                    'message' => 'message 3',
                    'user_id' => $u->id,
                ]);
            }else if($index==3){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'nik' => $fakerID->nik,
                    'email' => $fakerID->email,
                    'lettertype_id' => $lt->id,
                    'message' => 'message 4',
                    'user_id' => $u->id,
                ]);
            }
            $index++;
        }
        }
    }
}
