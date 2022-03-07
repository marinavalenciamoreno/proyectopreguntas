<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable=[
        'nivel',
        'numPreguntas',
        'fecha_inicio',
        'fecha_fin'
    ];

    public function tema(){
        return $this->belongsTo('App\Models\Tema');
    }

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
}
