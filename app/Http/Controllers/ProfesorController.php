<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    
    public function __construct(){
        $this->middleware('profe');
    }

    public function inicio(){
        return view('profesor.inicio');
    }

    public function resultado(){
        $alumnos = User::all();
        return view('profesor.inicio');
    }

    public function tema(){
        
    }
}
