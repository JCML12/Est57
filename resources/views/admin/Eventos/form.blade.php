@extends('layouts.lay')

@section('content')
    <style>
        textarea {
            overflow: hidden;
            resize: none;
            min-height: 50px;
        }
    </style>
    <script>
        document.addEventListener('input', function(event) {
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
    <div class="container p-3">
        <div class="container col-6">
            <h1>{{ isset($eventos->id) ? 'Editar Evento' : 'Crear Evento' }}</h1>
            @if (isset($eventos->id))
                <form action="{{ route('admin.eventos.update', $eventos->id) }}" method="POST" class="app-form"
                    enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form action="{{ route('admin.eventos.store') }}" method="POST" class="app-form"
                        enctype="multipart/form-data">
            @endif
            @csrf
            <div class="mb-3">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $eventos->titulo) }}"
                    class="form-control @error('titulo') is-invalid @enderror">
                @error('titulo')
                    <div class="alert alert-danger d-flex align-items-center m-2" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="m-2" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <div>
                            Este campo es obligatorio, máximo 255 caracteres.
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control @error('titulo') is-invalid @enderror">{{ old('descripcion', $eventos->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="alert alert-danger d-flex align-items-center m-2" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="m-2" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <div>
                            Este campo es obligatorio.
                        </div>
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $eventos->fecha) }}"
                    class="form-control @error('fecha') is-invalid @enderror">
                    @error('fecha')
                    <div class="alert alert-danger d-flex align-items-center m-2" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="m-2" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <div>
                            Este campo es obligatorio.
                        </div>
                    </div>
                @enderror
            </div>

            <div class="mb-3">

                <label for="images" class="form-label">Añadir Imágenes</label>
                <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images[]" multiple>
                <p>Si desea seleccionar múltiples imágenes, mantenga presionada la tecla Ctrl y seleccione sus archivos.</p>
                @error('images')
                    <div class="alert alert-danger d-flex align-items-center m-2" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="m-2" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <div>
                            Solo se admiten los formatos jpeg,png,jpg,gif,svg.
                        </div>
                    </div>
                @enderror
            </div>

            <div class="row col-12 ps-4">
                <button type="submit"
                    class="btn btn-success col-3">{{ isset($eventos->id) ? 'Actualizar' : 'Crear' }}</button>
                <div class="col-6"></div>
                <a href="{{ route('admin.eventos.index') }}" class="btn btn-danger col-3">Cancelar
                </a>
            </div>

            </form>

        </div>
    </div>
@endsection
