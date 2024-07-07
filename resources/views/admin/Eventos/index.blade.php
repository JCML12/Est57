@extends('layouts.lay')

@section('content')
    <div class="container">
        <h1>Lista de Eventos</h1>
        <a href="{{ route('admin.eventos.create') }}" class="btn btn-primary mb-3">Crear Evento</a>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr >
                    <th>Título</th>
                    <th  class="descripcion-col">Descripción</th>
                    <th>Fecha</th>
                    <th  class="imagenes-col">Imágenes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->titulo }}</td>
                        <td >
                           
                            <div class="mb-3">
                                <textarea class="form-control border-0 bg-transparent" rows="3">{{ $evento->descripcion }}</textarea>
                            </div>

                        </td>
                        <td>{{ $evento->fecha }}</td>
                        <td>
                            <h3>Imágenes</h3>
                            <div class="row">
                                @forelse($evento->images as $image)
                                    <div class="col-md-6">
                                        <img src="{{ Storage::url($image->ruta) }}" alt="Imagen"  width="100%">
                                        <form action="{{ route('admin.images.destroy', $image->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mt-2">Eliminar</button>
                                        </form> 
                                    </div>
                                @empty
                                    <p>No hay imágenes disponibles para este evento.</p>
                                @endforelse
                            </div> 
                        </td>
                        <td>
                            <a href="{{ route('admin.eventos.edit', $evento->id) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('admin.eventos.destroy', $evento->id) }}"
                                class="btn btn-sm btn-danger">Eliminar<i class="fa fatrash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{ $eventos->links() }}
    </div>
    <style>
         textarea{
            overflow: hidden;
            resize: none; 
            min-height: 50px;
        }
        .descripcion-col {
            width: 35%;
        }
        .imagenes-col {
            width: 35%; 
        }
    </style>
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
