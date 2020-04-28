<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection {
    function collection()
    {
        return Libro::all();
    }
}

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


    public static function exportData()
    { 
        return Excel::download(new DataExport, 'libros.xlsx');
    }

    public static function addToFavorite($id)
    {
        $data['id'] = $id;

        $libro = Libro::find($data['id']);

        $libro->toggleFavorite();

        return redirect()->back()
                        ->with('success','Libro favorito successfully');
    }

    public static function getFavoritos()
    {
        $user = auth()->user();
        $favoritos = $user->favorite(Libro::class); // returns a collection with the Posts the User marked as favorite
        return view('libros.favoritos',compact('favoritos'));
    }
}
