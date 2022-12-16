<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Letter;
use App\Models\Template;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LetterSeeder extends Seeder
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
        foreach(User::all() as $u){
            foreach(Template::all() as $t){
            if($index==0){
                Letter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
                    'file' => 'file1.pdf',
                    'message' => 'message 1',
                    'proses' => 'selesai',
                    'user_id' => $u->id,
                ]);
            }else if($index==1){
                Letter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
                    'file' => 'file2.pdf',
                    'message' => 'message 2',
                    'proses' => 'dalam proses',
                    'user_id' => $u->id,
                ]);
            }else if($index==2){
                Letter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
                    'file' => 'file3.pdf',
                    'message' => 'message 3',
                    'proses' => 'dalam proses',
                    'user_id' => $u->id,
                ]);
            }else if($index==3){
                Letter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
                    'file' => 'file4.pdf',
                    'message' => 'message 4',
                    'proses' => 'menunggu',
                    'user_id' => $u->id,
                ]);
            }
            $index++;
        }
    }
    }
}
