<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable=[
        'nombre',
    ];

    public function user(){ //Profesor
<<<<<<< HEAD
        return $this->belongsTo('App\Models\User', 'profesor_id');
=======
        return $this->belongsTo('App\Models\User');
>>>>>>> c67ab501002b33b3f749027540750c93a3ec428b
    }

    public function nivel(){
        return $this->belongsTo('App\Models\Nivel');
    }

    
}
