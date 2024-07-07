<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function destroy($id)
    {
        // Buscar la imagen por su ID
        $image = Image::findOrFail($id);

        // Eliminar la imagen del almacenamiento
        if (Storage::exists($image->ruta)) {
            Storage::delete($image->ruta);
        }

        // Eliminar la imagen de la base de datos
        $image->delete();

        // Redireccionar con un mensaje de éxito
        return redirect()->back();
    }
}
