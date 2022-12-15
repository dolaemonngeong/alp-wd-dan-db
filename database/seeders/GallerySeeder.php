<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::factory()->create([
            'image' => 'galeri1.png'
        ]);

        Gallery::factory()->create([
            'image' => 'galeri2.jpg'
        ]);

        Gallery::factory()->create([
            'image' => 'galeri3.jpg'
        ]);
    }
}
