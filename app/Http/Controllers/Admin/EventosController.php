<?php

namespace App\Http\Controllers\Admin;

use App\Models\Eventos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventos = Eventos::paginate(6);
        return view('admin.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //Muestra un formulario para guardar un recurso
        $eventos = new Eventos();
        return view('admin.eventos.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $evento = Eventos::create($request->only(['titulo', 'descripcion', 'fecha']));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $ruta = $file->store('public/images');
                $evento->images()->create(['ruta' => $ruta]);
            }
        }
        return redirect('/admin/eventos');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $eventos = Eventos::find($id);
        return view("admin.eventos.edit", compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $evento = Eventos::findOrFail($id);
        $evento->update($request->only(['titulo', 'descripcion', 'fecha']));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $ruta = $file->store('public/images');
                $evento->images()->create(['ruta' => $ruta]);
            }
        }

        return redirect('/admin/eventos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Buscar el evento por su ID
        $eventos = Eventos::findOrFail($id);

        // Obtener todas las imágenes asociadas al evento
        $images = $eventos->images;

        // Eliminar cada imagen del almacenamiento
        foreach ($images as $image) {
            if (Storage::exists($image->ruta)) {
                Storage::delete($image->ruta);
            }
        }

        // Eliminar las imágenes de la base de datos
        $eventos->images()->delete();

        // Eliminar el evento de la base de datos
        $eventos->delete();

        // Redireccionar con un mensaje de éxito
        return redirect()->back();
    }
}
