<?php

namespace Database\Seeders;

use App\Models\Villager;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VillagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID=Factory::create('id_ID');
        
        Villager::create([
            'name' => $fakerID->name,
            'birth_place' => 'Jakarta',
            'birth_date' => $fakerID->dateTimeBetween('-50 year','-30 year'),
            'nik' => $fakerID->nik,
            'phone'=>$fakerID->phoneNumber,
            'role' => 'pekerja'
        ]);

        Villager::create([
            'name' => $fakerID->name,
            'birth_place' => 'Kediri',
            'birth_date' => $fakerID->dateTimeBetween('-18 year','-5 year'),
            'nik' => $fakerID->nik,
            'phone'=>$fakerID->phoneNumber,
            'role' => 'pelajar'
        ]);

        Villager::create([
            'name' => $fakerID->name,
            'birth_place' => 'Tulungrejo',
            'birth_date' => $fakerID->dateTimeBetween('-50 year','-30 year'),
            'nik' => $fakerID->nik,
            'phone'=>$fakerID->phoneNumber,
            'role' => 'pekerja'
        ]);

        Villager::create([
            'name' => $fakerID->name,
            'birth_place' => 'Tulungrejo',
            'birth_date' => $fakerID->dateTimeBetween('-18 year','-5 year'),
            'nik' => $fakerID->nik,
            'phone'=>$fakerID->phoneNumber,
            'role' => 'pelajar'
        ]);
    }
}
