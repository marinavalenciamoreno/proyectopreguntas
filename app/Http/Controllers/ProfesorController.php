<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    
    public function resultado(){
        $alumnos = User::all();
        return view('profesor.inicio');
    }
}
