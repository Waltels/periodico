<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Portada;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index(){

        $articulos = Articulo::latest('id')->paginate(10);
        return view('admin.index', compact('articulos'));
    }
    public function observar(Articulo $articulo){

        return view('admin.observar', compact('articulo'));
    }

    public function obs(Request $request, Articulo $articulo){
        $articulo->observacion()->create($request->all());
        $articulo->estado = 1;
        $articulo->save();

        return redirect()->route('admin.articulos.index');
    }
    public function portada(){

        $articulos= Articulo::latest('id')->paginate(10);
        $portadas1 = Portada::where('portada', 1)->latest('id')->paginate(3);
        $portadas2 = Portada::where('portada', 2)->latest('id')->paginate(3);
        $portadas3 = Portada::where('portada', 3)->latest('id')->paginate(3);
        $portadas4 = Portada::where('portada', 4)->latest('id')->paginate(3);
        $portadas5 = Portada::where('portada', 5)->latest('id')->paginate(6);
        $vistos = Portada::where('portada', 6)->latest('id')->paginate(8);
        $semanas = Portada::where('portada', 7)->latest('id')->paginate(8);
        return view('admin.portada', compact('portadas1',  
                                            'portadas2',
                                            'portadas3',
                                            'portadas4',
                                            'portadas5',
                                            'vistos',
                                            'semanas',
                                            'articulos'
                                    ));
    }

    public function estado(Portada $portada){

        $categorias= Categoria::all();
        return view('admin.estado', compact('portada', 'categorias'));
    }

    public function update(Request $request, Portada $portada){

        $request->validate([
            'portada'=> 'required',
            'articulo_id'=>"required|unique:portadas,articulo_id,{$portada->id}",
        ]);
        
        $portada->update($request->all());

        return redirect()->route('admin.articulos.portada');
    }

    public function store(Request $request){
        $request->validate([
            'portada'=> 'required',
            'articulo_id'=>'required|unique:portadas,articulo_id'
        ]);
        Portada::create($request->all());
        return redirect()->route('admin.articulos.portada');
    } 
}
