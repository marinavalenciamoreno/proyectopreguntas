<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


<<<<<<< HEAD
class ExamenUserSeeder extends Seeder
=======
class ExamenUsuarioSeeder extends Seeder
>>>>>>> 673be38eef4f4977425aed2ec7bd0cd666bd3a05
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('examens_users')->insert([
                [
<<<<<<< HEAD
=======
                    'fecha_realizacion' => null,
                    'num_respuestas_correctas' => null,
>>>>>>> 673be38eef4f4977425aed2ec7bd0cd666bd3a05
                    'examen_id' => 1,
                    'user_id' => 2,
                ],
            ]);

    }
}
