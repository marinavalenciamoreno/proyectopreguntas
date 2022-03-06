<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable=[
        'nivel',
        'enunciado',
        'respuesta1',
        'respuesta2',
        'respuesta3',
        'respcorrect',
        'tema_id'
    ];

    public function tema(){
        return $this->belongsTo('App\Models\Tema', 'tema_id');
    }

}
