<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable=[
        'numero',
        'nombre'
    ];

    public function materia(){
        return $this->belongsTo('App\Models\Materia');
    }

    public function pregunta(){
        return $this->hasMany('App\Models\Pregunta');
    }
}
