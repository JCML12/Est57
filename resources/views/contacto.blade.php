@extends('layouts.app')
@section('content')
    <style>
        body {
            background-image: linear-gradient(#994d1c, #6b240c);
            background-repeat: no-repeat;
            color: #fff;
        }
    </style>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 pb-5">
                <h1><strong>Contacta con nosotros</strong></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center pb-5">
            <div class="col-md-4">

                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <h1><strong>Teléfono dirección</strong></h1>
                <h4>466-665-5668</h4>
            </div>
            <div class="col-md-4">

                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <h1><strong>Celular dirección</strong></h1>
                <h4>466-110-0287</h4>
            </div>
            <div class="col-md-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
                <h1><strong>Whatsapp</strong></h1>
                <h4>466-110-0287</h4>
            </div>

        </div>

        <div class="row text-center pt-3">
            <div class="col-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
                <h1><strong>Correo electrónico</strong></h1>
                <h4>11DST0077C@seg-gto.gob.mx</h4>
            </div>
            <div class="col-6">
                <a class="btn btn-outline-light border-0" href="https://www.facebook.com/pedro.tecnica.1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                    <h1><strong>Facebook</strong></h1>
                    <h4>Perfil de la institución</h4>

                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 pt-3">
                <h1><strong>Nuestra dirección</strong></h1>
            </div>
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3743.7715198921883!2d-100.9384017!3d20.2268133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cc2555226814b%3A0x22103f33fdd7973e!2sEscuela%20Secundaria%20Tecnica%20No.%2057!5e0!3m2!1ses!2smx!4v1720243364374!5m2!1ses!2smx"
                    width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
