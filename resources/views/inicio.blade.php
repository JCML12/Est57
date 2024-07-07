@extends('layouts.app')
@section('content')
    <div class="container">




        <div class="container-fluid">
            <div class="row" id="d1">
                <div class="col-md-8">
                    <div class="container con col-8">
                        <h1><strong>Bienvenido</strong></h1>
                        <p class="lead">Este es el sitio oficial de la escuela secundaria técnica #57 de San Pedro de los
                            Naranjos, Salvatierra, Guanajuato con CCT: 11DST0077C</p>
                        <h4><strong>Educando desde 1996</strong></h4>
                        <a href="nosotros" class="btn btn-primary">Saber más</a>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center  mt-4">
                    <div class="right-image m-5"></div>
                </div>
            </div>
        </div>
        <div class="container con text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>¿Quieres contactarnos?</h1>
                    <p class="lead">Usa el botón y ponte en contacto con la institución recuerda que tenemos un horario de
                        7:00 AM a 2:00 PM</p>
                    <div id="container">
                        <a class="btn btn-outline-light" href="/contacto">
                            Contacto
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
        body {
            background-image: linear-gradient(#994d1c, #6b240c);
            background-repeat: no-repeat;
            color: #fff;
        }

        .con {
            padding: 80px 0;
        }

        .btn-primary {
            background-color: #994d1c;
            border-color: #994d1c;
        }

        .btn-primary:hover {
            background-color: #e48f45;
            border-color: #e48f45;
        }

        .right-image {
            background-image: url("{{ asset('img/Logo57.png') }}");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 250px;
            width: 250px;
            border-radius: 50%;
        }

        #d1 {
            background-color: #6b240c;
            border-radius: 20px;
        }
    </style>
@endsection
