<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Portada;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Articulo $articulo)
    {
        $categorias = Categoria::where('id', '<', '5')->paginate(4);

        $mundos =Articulo::where('categoria_id', 5)->latest('id')->paginate(1);
        $politicas =Articulo::where('categoria_id', 6)->latest('id')->paginate(1);
        $tecnologias =Articulo::where('categoria_id', 7)->latest('id')->paginate(1);
        $deportes =Articulo::where('categoria_id', 8)->latest('id')->paginate(1);

        $portadas1 = Portada::where('portada', 1)->latest('id')->paginate(1);
        $portadas2 = Portada::where('portada', 2)->latest('id')->paginate(1);
        $portadas3 = Portada::where('portada', 3)->latest('id')->paginate(1);
        $portadas4 = Portada::where('portada', 4)->latest('id')->paginate(1);
        $portadas5 = Portada::where('portada', 5)->latest('id')->paginate(2);
        $vistos = Portada::where('portada', 6)->latest('id')->paginate(8);
        $semanas = Portada::where('portada', 7)->latest('id')->paginate(8);
        return view('dashboard', compact('portadas1',  
                                        'portadas2',
                                        'portadas3',
                                        'portadas4',
                                        'portadas5',
                                        'vistos',
                                        'semanas',
                                        'articulo',
                                        'categorias', 
                                        'mundos', 
                                        'politicas', 
                                        'tecnologias', 
                                        'deportes'
        ));
    }
    
}
