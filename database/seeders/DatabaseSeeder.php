<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RolSeeder;
use Database\Seeders\ImagenesSeeder;
use Database\Seeders\ProductoSeeder;
use Database\Seeders\FormasPagoSeeder;
use Database\Seeders\PedidoSeeder;
use Database\Seeders\UsuarioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call(RolSeeder::class);
        $this -> call(ImagenesSeeder::class);
        $this -> call(ProductoSeeder::class);
        $this -> call(FormasPagoSeeder::class);
        $this -> call(UsuarioSeeder::class);
        $this -> call(PedidoSeeder::class);
    }
}
