<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Http\Controllers\Controller;


class EventosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Eventos::paginate(6);
        return view('eventos.index', compact('eventos'));
    }

    public function show($id)
    {
        $eventos = Eventos::find($id);
        return view('eventos.show', compact('eventos'));
    }

}