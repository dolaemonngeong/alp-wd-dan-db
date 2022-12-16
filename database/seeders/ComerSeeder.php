<?php

namespace Database\Seeders;

use App\Models\Comer;
use App\Models\Villager;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComerSeeder extends Seeder
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
        foreach(Villager::all() as $villager){
            if($index==0){
                Comer::create([
                    'name' => $fakerID->name,
                    'birth_place' => 'Surabaya',
                    'birth_date' => $fakerID->dateTimeBetween('-50 year','-30 year'),
                    'nik' => $fakerID->nik,
                    'phone'=>$fakerID->phoneNumber,
                    'phone'=>$fakerID->phoneNumber,
                    'role' => 'pekerja',
                    'gender' => 'laki-laki',
                    'villager_id' => $villager->id,
                ]);
            }else if($index==1){
                Comer::create([
                    'name' => $fakerID->name,
                    'birth_place' => 'Tulungagung',
                    'birth_date' => $fakerID->dateTimeBetween('-19 year','-5 year'),
                    'nik' => $fakerID->nik,
                    'phone'=>$fakerID->phoneNumber,
                    'role' => 'pelajar',
                    'gender' => 'perempuan',
                    'villager_id' => $villager->id,
                ]);
            }else if($index==2){
                Comer::create([
                    'name' => $fakerID->name,
                    'birth_place' => 'Yogyakarta',
                    'birth_date' => $fakerID->dateTimeBetween('-50 year','-25 year'),
                    'nik' => $fakerID->nik,
                    'phone'=>$fakerID->phoneNumber,
                    'role' => 'lainnya',
                    'gender' => 'perempuan',
                    'villager_id' => $villager->id,
                ]);
            }else if($index==3){
                Comer::create([
                    'name' => $fakerID->name,
                    'birth_place' => 'Banjarmasin',
                    'birth_date' => $fakerID->dateTimeBetween('-19 year','-5 year'),
                    'nik' => $fakerID->nik,
                    'phone'=>$fakerID->phoneNumber,
                    'role' => 'pelajar',
                    'gender' => 'laki-laki',
                    'villager_id' => $villager->id,
                ]);
            }
            $index++;
        }  
    }
}
