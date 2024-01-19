@extends('components.base')

@section('titles')
    <title>CAZA MABÓ Sayulita - {{__('Preventa de condominios en Sayulita, Nayarit.')}}</title>
    <meta name="description" content="{{__('Caza Mabó, un exclusivo desarrollo inmobiliario en preventa en Sayulita, Nayarit, que redefine la conexión entre el estilo de vida moderno y la naturaleza. Con 27 condominios diseñados para integrarse armoniosamente con el entorno. Descubre la armonía y tranquilidad que Caza Mabó tiene para ofrecer, donde la modernidad se encuentra con la belleza natural en un espacio que va más allá de un hogar')}}">
@endsection

@section('content')

    {{-- Inicio --}}
    <div class="position-relative">
        <img src="{{asset('img/fachada-alberca.webp')}}" alt="Fachada de Caza Mabó Sayulita" class="w-100" style="height: 100vh; object-fit:cover; object-position:bottom;">
        <div class="fondo-cafe"></div>

        <div class="row h-100 justify-content-center position-absolute start-0 top-0 z-3">
            <div class="col-12 col-lg-8 col-xxl-4 text-center align-self-center text-white">
                <h1 class="mb-4">{{__('Estilo de vida moderno, belleza y la armonía de la naturaleza.')}}</h1>
                <p class="mb-4">{{__('El diseño de este proyecto se enfoca en crear espacios que se integren perfectamente con el entorno, maximizando el uso de los espacios y permitiendo que los usuarios disfruten de la conexión directa con la naturaleza.')}}</p>
                <a href="#" class="btn w-100 btn-outline-light rounded-0">{{__('Inventario')}}</a>
            </div>
        </div>

    </div>

@endsection