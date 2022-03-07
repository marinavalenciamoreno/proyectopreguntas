<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveleseducativo extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
