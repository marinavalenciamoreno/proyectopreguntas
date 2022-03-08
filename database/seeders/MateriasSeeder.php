<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'nombre'=>"Biología y Geología (1º ESO)",
            'niveleseducativos_id'=>1
        ]);

        Materia::create([
            'nombre'=>"Matemáticas (1º ESO)",
            'niveleseducativos_id'=>1
        ]);

        Materia::create([
            'nombre'=>"Música (2º ESO)",
            'niveleseducativos_id'=>2
        ]);

        Materia::create([
            'nombre'=>"Geología (2º ESO)",
            'niveleseducativos_id'=>2
        ]);

        Materia::create([
            'nombre'=>"Biología y Geología (3º ESO)",
            'niveleseducativos_id'=>3
        ]);

        Materia::create([
            'nombre'=>"Física y Química (3º ESO)",
            'niveleseducativos_id'=>3
        ]);
    }
}
