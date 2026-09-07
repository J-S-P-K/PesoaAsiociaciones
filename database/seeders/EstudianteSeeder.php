<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Estudiante::create(['nombre' => 'Santi', 'dni' => '12345678', 'curso' => '5to A']);
        Estudiante::create(['nombre' => 'JUan', 'dni' => '22345678', 'curso' => '5to A']);
        Estudiante::create(['nombre' => 'Pedro', 'dni' => '32345678', 'curso' => '5to A']);
        Estudiante::create(['nombre' => 'Ramirez', 'dni' => '42345678', 'curso' => '5to B']);
    }
}
