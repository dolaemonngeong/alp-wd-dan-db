<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Template;
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
        foreach(User::all() as $u){
            foreach(Template::all() as $t){
            if($index==0){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
<<<<<<< Updated upstream:database/seeders/OnlineLetterSeeder.php
                    'file_letter' => 'file1.pdf',
=======
                    'file' => 'letter/file1.pdf',
>>>>>>> Stashed changes:database/seeders/LetterSeeder.php
                    'message' => 'message 1',
                    'proses' => 'selesai',
                    'user_id' => $u->id,
                ]);
            }else if($index==1){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
<<<<<<< Updated upstream:database/seeders/OnlineLetterSeeder.php
                    'file_letter' => 'file2.pdf',
=======
                    'file' => 'letter/file2.pdf',
>>>>>>> Stashed changes:database/seeders/LetterSeeder.php
                    'message' => 'message 2',
                    'proses' => 'selesai',
                    'user_id' => $u->id,
                ]);
            }else if($index==2){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
<<<<<<< Updated upstream:database/seeders/OnlineLetterSeeder.php
                    'file_letter' => 'file3.pdf',
=======
                    'file' => 'letter/file3.pdf',
>>>>>>> Stashed changes:database/seeders/LetterSeeder.php
                    'message' => 'message 3',
                    'proses' => 'menunggu',
                    'user_id' => $u->id,
                ]);
            }else if($index==3){
                Onlineletter::create([
                    'name' => $fakerID->name,
                    'email' => $fakerID->email,
                    'phone' => $fakerID->phoneNumber,
                    'template_id' => $t->id,
<<<<<<< Updated upstream:database/seeders/OnlineLetterSeeder.php
                    'file_letter' => 'file4.pdf',
=======
                    'file' => 'letter/file4.pdf',
>>>>>>> Stashed changes:database/seeders/LetterSeeder.php
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
