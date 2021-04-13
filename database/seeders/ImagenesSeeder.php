<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        imagenes::factory()->count(10)->create();
    }
}
