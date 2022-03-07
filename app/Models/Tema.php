<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable=[
        'numeroTema',
        'nombre'
    ];

    public function materia(){
        return $this->belongsTo('App\Models\Materia', 'materia_id');
    }

    public function pregunta(){
        return $this->hasMany('App\Models\Pregunta');
    }
}
