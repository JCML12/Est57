@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: linear-gradient(#994d1c, #6b240c);
            background-repeat: no-repeat;
            color: #fff;


        }

        textarea {
            overflow: hidden;
            resize: none; 
            min-height: 50px;

        }
    </style>

    <div class="container">
        <div class="row text-center">
            <div class="col-12 pb-5">
                <h1><strong>{{ $eventos->titulo }}</strong></h1>
            </div>
        </div>

        <div class="row">
            @forelse($eventos->images as $image)
                <div class="col-md-4 mt-2">
                    <a href="/foto/{{ $image->id }} ">
                        <img src="{{ Storage::url($image->ruta) }}" alt="Imagen" class="img-fluid">
                    </a>
                </div>

            @empty
                <p>No hay imágenes disponibles para este evento.</p>
            @endforelse
        </div>

        <div class="row">
            <h4><strong>Fecha del evento: {{ $eventos->fecha }}</strong></h4>
            <textarea class="lead bg-transparent text-white border-0">{{ $eventos->descripcion }}</textarea>

        </div>
        <a href="/eventos" class="btn btn-outline-light">Regresar</a>

    </div>
    <script>
        document.addEventListener('input', function (event) {
            if (event.target.tagName.toLowerCase() !== 'textarea') return;
            autoResize(event.target);
        });

        function autoResize(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
        }

        // Inicializar tamaño ajustable
        document.querySelectorAll('textarea').forEach(textarea => {
            autoResize(textarea);
        });
    </script>
@endsection
