<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }
}
