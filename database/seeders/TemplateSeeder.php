<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::factory()->create([
            'name' => 'template pertama',
            'description' => 'desc pertama',
            'file' => 'template1.pdf',
        ]);
        
        Template::factory()->create([
           'name' => 'template kedua',
           'description' => 'desc kedua',
           'file' => 'template2.pdf',
        ]);
        
        Template::factory()->create([
            'name' => 'template ketiga',
            'description' => 'desc ketiga',
            'file' => 'template3.pdf',
        ]);
    }
}
