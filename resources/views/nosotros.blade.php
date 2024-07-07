@extends('layouts.app')
@section('content')
    <style>
        body {
            background-image: linear-gradient(#994d1c, #6b240c);
            background-repeat: no-repeat;
            color: #fff;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        p {
            text-align: justify;
        }

        #lis {
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

                <h1><strong>¿Quienes somos?</strong></h1>
                <br>
                <p class="lead">Somos una institución que fue fundada el 15 de octubre de 1996, estamos ubicados en la
                    calle Naciones Unidas S/N en la comunidad de San Pedro de Los Naranjos, Salvatierra, Gto. </p>
                <p class="lead">Actualmente, la escuela sigue en operativo, formando técnicos y técnicas en la región.
                    Gracias a los 27 años de experiencia, la institución ofrece educación integral y de calidad, además de
                    contar con excelentes profesores, lo cual hace de la institución la mejor opción para cursar el nivel de
                    educación básica.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">

                <h1><strong>Historia de la escuela</strong></h1>
                <br>
                <p class="lead">
                    En años anteriores a la fundación de la escuela, pobladores se organizaron para salir en busca de
                    jóvenes que quisieran estudiar, fueron de casa en casa preguntando por personas que quisieran continuar
                    con sus estudios básicos, ya que el principal motivo de deserción era la falta de una escuela secundaria
                    en la localidad.
                </p>
                <p class="lead">En 1996, comenzaron las clases. En ese tiempo las clases se tomaban en las instalaciones de
                    la delegación, ya que no se contaba con un espacio para impartir y tomar clases. El primer director de
                    la institución era el profesor Isaías Ortega Fortuno. </p>
                <p class="lead">
                    Después de un tiempo se consiguió permiso para tomar clases en unas aulas del CONALEP, en ese entonces
                    se empezaron a construir 2 de las actuales aulas que tiene la instrucción.
                </p>
                <p class="lead">
                    Una vez que se finalizaron las aulas en 1997, los alumnos por fin tomaron clases en la ubicación actual
                    de la secundaria.
                </p>


            </div>
            <div class="col-6">
                <img src="{{ asset('img/1gen_1.jpg') }}" alt="Foto Priemera Generación" width="100%">
                <p class="text-center">Primera generación de la secundaria créditos a quien corresponda.</p>
            </div>
            <div class="col-6">
                <img src="{{ asset('img/1gen_2.jpg') }}" alt="Foto Priemera Generación 2" width="100%">
                <p class="text-center">Primera generación de la secundaria créditos a quien corresponda.</p>
            </div>
            <div class="col-12">
                <h1><strong>Anécdotas de exalumnos</strong></h1>
                <p class="lead">
                    Los honores a la bandera se hacían en la calle, pues no había suficiente espacio en la delegación.
                    <br>
                    <br>
                    En invierno, cuando el frío se intensificaba, los maestros permitían que los alumnos llevaran una
                    frazada, manta o cobija, para resguardarse del frío, ya que el espacio no era el óptimo para las clases.
                    Además, algunos maestros ofrecían bebidas calientes a los alumnos.
                </p>
                <p><b>Fuente: Exalumna de la primera generación de la institución </b></p>

            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm">
                <h2><strong>Misión</strong></h2>
                <p class="lead">Formar personas con valores, competencias y conocimientos que les
                    permitan desarrollar su potencial y contribuir al desarrollo de la comunidad y la región
                </p>
            </div>
            <div class="col-sm">
                <h2><strong>Visión</strong></h2>
                <p class="lead">Ser una institución que, a través de estrategias innovadoras en materia educativa,
                    permitan
                    a la población tener crecimiento personal, humano, cultural, deportivo y profesional.</p>
            </div>
            <div class="col-sm">
                <h2><strong>Valores</strong></h2>
                <p class="lead">Nuestros valores principales y fundamentales son:

                </p>
                <p class="lead" id="lis">- Respeto
                </p>
                <p class="lead" id="lis">- Tolerancia
                </p>
                <p class="lead" id="lis">- Disiplina
                </p>
                <p class="lead" id="lis">- Honestidad</p>
            </div>
        </div>
    </div>
@endsection
