@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: linear-gradient(#994d1c, #6b240c);
            background-repeat: no-repeat;
            color: #fff;
        }
        a{

        }
        img {
            max-width: 100%;
        }
    </style>
    <div class="container">
        <div class="container">
            <div class="row text-center">
                <h1><strong>Conoce los eventos de la semana</strong></h1>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                @foreach ($eventos as $evento)
                
                    <div class="col-md-6">
                        <div class="card bg-transparent border-0">
                        <a href="/eventos/{{ $evento->id }} " class="btn text-light">
                        @if ($evento->images->isNotEmpty())
                                <img src="{{ Storage::url($evento->images->first()->ruta) }}" alt="Imagen">
                            @else
                                <p class="lead">No hay imágenes disponibles para este evento.</p>
                        @endif
                        <div class="row">
                            <div class="text-start">
                                <h2><strong>{{ $evento->titulo }}</strong></h2>
                            </div>
                            <div class="text-end">
                                <h4>{{ $evento->fecha }}</h4>
                            </div>
                        </div>
                        </a>
                        </div>
                        
                    </div>
                </a>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3 ">

                {{ $eventos->links() }}

            </div>
        </div>




    </div>



    </div>
@endsection
