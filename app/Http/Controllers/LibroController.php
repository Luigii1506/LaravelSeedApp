<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'fecha_publicacion' => 'required',
            'editorial' => 'required',
            'resumen' => 'required',
            'genero' => 'required',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')->with('success','Libro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libros.show',compact('libro'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('libros.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'fecha_publicacion' => 'required',
            'editorial' => 'required',
            'resumen' => 'required',
            'genero' => 'required',
            'paginas' => 'required'
        ]);
  
        $libro->update($request->all());
  
        return redirect()->route('libros.index')
                        ->with('success','Libro updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
  
        return redirect()->route('libros.index')
                        ->with('success','Libro  deleted successfully');
    }
}
