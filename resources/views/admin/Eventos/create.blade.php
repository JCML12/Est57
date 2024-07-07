@extends('layouts.lay')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>Eventos</h1>
            <p>Gestión de Eventos</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="title">
                <div class="title-body">
                    <div class="card padding">
                        <header>
                            <h4>Agregar evento nuevo</h4>
                        </header>
                        <div class="card-body">
                            @include('admin.eventos.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection