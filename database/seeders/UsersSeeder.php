<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'niveleducativo_id' => null,
            'password' => bcrypt("admin"),
            'tipo' => "admin"
        ]);

        DB::table('users')->insert([
            'name' => "Alumno1",
            'email' => "alumno1@gmail.com",
            'niveleducativo_id' => 0,
            'password' => bcrypt("alumno1"),
            'tipo' => "alumno"
        ]);
        DB::table('users')->insert([
            'name' => "Profesor1",
            'email' => "profesormatemat1eso@gmail.com",
            'niveleducativo_id' => 0,
            'password' => bcrypt("profmat1eso"),
            'tipo' => "profesor"
        ]);
    }
}
