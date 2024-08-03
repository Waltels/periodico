<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function articulo(){
        return $this->hasMany(Articulo::class);
    }
}
