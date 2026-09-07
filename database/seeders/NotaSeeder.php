<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nota;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nota::create([
            'materia'       => 'Eco11', 
            'estudiante_id' => '1' ,
            'nota' => '6'
            ]);

            Nota::create([
            'materia'       => 'Eco11', 
            'estudiante_id' => '3' ,
            'nota' => '8'

            ]);
    }
}
