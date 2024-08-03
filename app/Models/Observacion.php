<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;
    protected $fillable = ['cuerpo', 'aticulo_id'];

    //Relacion uno a muchos inversa
    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }      
}
