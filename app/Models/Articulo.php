<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Articulo extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'estado'];
    const Borrador = 1;
    const Revisado = 2;
    const Publicado = 3;


    //generar Slug
    public function getRouteKeyName()
    {
        return 'slug';
    }


    //relacion unp a uno
    public function observacion(){
        return $this->hasOne(Observacion::class);
    }

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //relacion uno a muchos
    public function comentario(){
        return $this->hasMany(Comentario::class);
    }
     public function portada(){
        return $this->hasMany(Portada::class);
    }

    //relacion uno a uno polimorfica
    public function img():MorphOne{
        return $this->morphOne(Img::class, 'imgable');
    }
}
