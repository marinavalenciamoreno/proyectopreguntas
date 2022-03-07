<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelEducativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('niveleseducativos')->insert([
            'nombre' => "1º ESO",  
        ]);
        DB::table('niveleseducativos')->insert([
            'nombre' => "2º ESO",  
        ]);
        DB::table('niveleseducativos')->insert([
            'nombre' => "3º ESO",  
        ]);
        DB::table('niveleseducativos')->insert([
            'nombre' => "4º ESO",  
        ]);
        DB::table('niveleseducativos')->insert([
            'nombre' => "1º BACH",  
        ]);
        DB::table('niveleseducativos')->insert([
            'nombre' => "2º BACH",  
        ]);
    }
    
}
