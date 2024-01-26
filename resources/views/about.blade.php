@extends('components.base')

@section('titles')
    <title>Sobre Nosotros - Caza Mabó</title>
    <meta name="description" content="{{__('')}}">
@endsection

@section('content')

    <div class="position-relative">
        <img src="{{asset('/img/nosotros-bg.webp')}}" alt="Sobre Caza Mabó" class="w-100">
        <div class="fondo-cafe"></div>

        <div class="row justify-content-evenly position-absolute top-0 start-0 h-100 z-3">

            <div class="col-12 col-lg-3 align-self-center">
                <img src="{{asset('img/logo-g18-white.webp')}}" alt="Logo Grupo G18" class="w-100">
            </div>

            <div class="col 12 col-lg-4 align-self-center text-white text-center text-lg-start">
                <h1>{{__('Sobre Nosotros')}}</h1>
                <p class="fs-5" style="font-weight: 200;">{{__('Somos un fondo inmobiliario ubicado en la zona de Puerto Vallarta y Riviera Nayarit con más de 30 años de experiencia, nos distinguimos por trabajar en conjunto con Desarrollos Inmobiliarios, Construcción y Real Estate; equipo de profesionales comprometidos para garantizar que encuentres el estilo de vida que requieres. La unión de estas 3 divisiones son las que hacen a Grupo G-18 uno de los mejores fondos de la zona.')}}</p>
            </div>

        </div>

    </div>

    <div class="my-6 py-5 bg-green row justify-content-evenly">

        <div class="col-12 col-lg-3 d-flex justify-content-center">
            <div class="d-flex">
                
            </div>
            <h2 class="fw-light fs-5">{{__('Años de experiencia')}}</h2>
        </div>

        <div class="col-12 col-lg-3 d-flex justify-content-center">
            <h2 class="fw-light fs-5">{{__('Construcciones terminadas')}}</h2>
        </div>

        <div class="col-12 col-lg-3 d-flex justify-content-center">
            <h2 class="fw-light fs-5">{{__('Proyectos desarrollados')}}</h2>
        </div>

    </div>

@endsection
