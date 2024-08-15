<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Perfil;
use App\Models\Portada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        $articulos = Articulo::where('user_id', auth()->user()->id)->latest()->paginate(10);
        return view('editor.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('editor.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=> 'required',
            'slug'=> 'required|unique:articulos,slug',
            'subtitulo'=> 'required',
            'contenido'=> 'required',
            'categoria_id'=> 'required',
            'file'=>'image',

        ]);
       

       $articulo =Articulo::create($request->all());

       if ($request->file('file')) {
        $url = Storage::put('public/articulos', $request->file('file'));
        $articulo->img()->create([
            'url'=> $url
        ]);
       }

       return redirect()->route('articulos.edit', $articulo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo, Perfil $perfil )
    {
        $categorias = Categoria::all();
        $semanas = Portada::where('portada', 7)->latest('id')->paginate(8);
        $articulos = Articulo::all();
        
        return view('editor.show', compact('articulos','articulo', 'semanas', 'perfil', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulo $articulo)
    {
        $categorias = Categoria::all();
        return view('editor.edit', compact('articulo', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'titulo'=> 'required',
            'slug'=> 'required|unique:articulos,slug,' . $articulo->id,
            'subtitulo'=> 'required',
            'contenido'=> 'required',
            'categoria_id'=> 'required',   
            
        ]);

        $articulo->update($request->all());

        if($request->file('file')){
            $url = Storage::put('public/articulos', $request->file('file'));
            if ($articulo->img) {
                Storage::delete($articulo->img->url);
                $articulo->img->update([
                    'url'=> $url
                ]);
            }else {
                $articulo->img()->create([
                    'url'=>$url
                ]);
            }
        }

        return redirect()->route('articulos.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function estado(Articulo $articulo)
    {
        $articulo->estado = 2;
        $articulo->save();

        if ($articulo->observacion) {

            $articulo->observacion->delete();
        }

        return redirect()->route('articulos.edit', $articulo);
    }

    public function publicar(Articulo $articulo)
    {
        $articulo->estado = 3;
        $articulo->save();
        return redirect()->route('admin.articulos.index', $articulo);
    }
    public function revisar(Articulo $articulo)
    {
        $articulo->estado = 2;
        $articulo->save();
        return redirect()->route('articulos.index', $articulo);
    }
    public function observacion(Articulo $articulo){
        return view('editor.observacion', compact('articulo'));
    }
}
