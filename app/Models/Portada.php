<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portada extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    const P1 = 1;
    const P2 = 2;
    const P3 = 3;
    const P4 = 4;
    const P5 = 5;
    const Vistos = 6;
    const Semana = 7;


    //Relacion uno a muchos inversa
    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }
}
