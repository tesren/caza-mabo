@extends('components.base')

@section('titles')
    <title>Sobre Nosotros - Caza Mabó</title>
    <meta name="description" content="{{__('Con más de 30 años de experiencia, somos un fondo inmobiliario arraigado en la próspera región de Puerto Vallarta y Riviera Nayarit. Nos enorgullece nuestra colaboración integral entre Desarrollos Inmobiliarios, Construcción y Real Estate, uniendo fuerzas para ofrecer una experiencia única.')}}">
@endsection

@section('content')

    {{-- Inicio --}}
    <div class="position-relative">
        <img src="{{asset('/img/nosotros-bg.webp')}}" alt="Sobre Caza Mabó" class="w-100" style="height: 100vh; object-fit:cover;">
        <div class="fondo-cafe"></div>

        <div class="row justify-content-evenly position-absolute top-0 start-0 h-100 z-3">

            <div class="col-8 col-lg-3 align-self-end align-self-lg-center mt-5 mt-lg-0">
                <img src="{{asset('img/logo-g18-white.webp')}}" alt="Logo Grupo G18" class="w-100">
            </div>

            <div class="col-11 col-lg-4 align-self-center text-white text-center text-lg-start">
                <h1>{{__('Sobre Nosotros')}}</h1>
                <p class="fs-5" style="font-weight: 200;">{{__('Somos un fondo inmobiliario ubicado en la zona de Puerto Vallarta y Riviera Nayarit con más de 30 años de experiencia, nos distinguimos por trabajar en conjunto con Desarrollos Inmobiliarios, Construcción y Real Estate; equipo de profesionales comprometidos para garantizar que encuentres el estilo de vida que requieres. La unión de estas 3 divisiones son las que hacen a Grupo G-18 uno de los mejores fondos de la zona.')}}</p>
            </div>

        </div>

    </div>

    {{-- Puntos Clave --}}
    <div class="my-6 py-5 bg-green row justify-content-evenly">

        <div class="col-12 col-lg-3 d-flex justify-content-center mb-4 mb-lg-0">
            <img src="{{asset('img/41.png')}}" alt="" width="70px" class="align-self-center">
            <img src="{{asset('/img/slash.png')}}" width="50px" alt="" class="align-self-center">
            <h2 class="fw-light fs-5 align-self-center">{{__('Años de experiencia')}}</h2>
        </div>

        <div class="col-12 col-lg-3 d-flex justify-content-center mb-4 mb-lg-0">
            <img src="{{asset('img/350.png')}}" width="110px" alt="" class="align-self-center">
            <img src="{{asset('/img/slash.png')}}" width="50px" alt="" class="align-self-center">
            <h2 class="fw-light fs-5 align-self-center">{{__('Construcciones terminadas')}}</h2>
        </div>

        <div class="col-12 col-lg-3 d-flex justify-content-center mb-4 mb-lg-0">
            <img src="{{asset('img/20.png')}}" width="80px" alt="" class="align-self-center">
            <img src="{{asset('/img/slash.png')}}" width="50px" alt="" class="align-self-center">
            <h2 class="fw-light fs-5 align-self-center">{{__('Proyectos desarrollados')}}</h2>
        </div>

    </div>

    {{-- Desarrolladores --}}
    <div class="row justify-content-evenly mb-6 bg-brown" style="min-height: 550px;">

        <div class="col-12 col-lg-6 text-center white-line position-relative text-white d-flex py-5 py-lg-0" style="background-color: #92501E;">
            <div class="align-self-center">
                <img src="{{asset('img/viccza-logo.png')}}" alt="Logo de Viccza desarrollador de Caza Mabó" class="col-6 col-lg-5 mx-auto mb-4">
                <p class="fw-light col-10 col-lg-8 mx-auto">{{__('Viccza es una empresa de esencia moderna, que busca renovar la perspectiva de la construcción, haciéndola más funcional y útil a través de las nuevas tendencias')}}</p>    
            </div>
        </div>

        <div class="col-12 col-lg-6 align-self-center text-center py-5 py-lg-0">
            <img src="{{asset('img/green-18-logo.png')}}" alt="Logo de Viccza desarrollador de Caza Mabó" class="col-6 col-lg-4 mx-auto mb-4">
            <p class="fw-light col-10 col-lg-8 mx-auto">{{__('Somos un equipo cuyo principal objetivo es enriquecer la vida de las personas con espacios sustentables de alto nivel')}}</p>
        </div>

    </div>

    {{-- Formulario de contacto --}}
    @include('components.contact-form')

@endsection

@section('javascript')
    <script>
        var navbar = document.getElementById('main-navbar');
        var alturaDelViewport = window.innerHeight;

        window.addEventListener("scroll", function () {
            var scrolled = window.scrollY;

            if (window.innerWidth > 0) {
                if (scrolled > alturaDelViewport) {
                    // Añadir clase 'bg-brown'
                    // Eliminar clase 'bg-transparent'
                    navbar.classList.add('bg-brown');
                    navbar.classList.add('shadow-4');
                    navbar.classList.remove('bg-transparent');
                } else {
                    // Añadir clase 'bg-transparent'
                    // Eliminar clase 'bg-brown'
                    navbar.classList.add('bg-transparent');
                    navbar.classList.remove('bg-brown');
                    navbar.classList.remove('shadow-4');
                }
            }
        });
    </script>
@endsection
