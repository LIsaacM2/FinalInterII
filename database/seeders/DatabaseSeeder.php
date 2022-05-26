<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'Nombre' => 'Usuario desconocido',
            'ApellidoPaterno' => 'Apellido desconocido',
            'ApellidoMaterno' => 'Apellido desconocido',
            'Correo' => 'Correo desconocido'
        ]);
    }
}
