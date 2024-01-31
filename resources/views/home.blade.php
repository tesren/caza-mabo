@extends('components.base')

@section('titles')
    <title>CAZA MABÓ Sayulita - {{__('Preventa de condominios en Sayulita, Nayarit.')}}</title>
    <meta name="description" content="{{__('Caza Mabó, un exclusivo desarrollo inmobiliario en preventa en Sayulita, Nayarit, que redefine la conexión entre el estilo de vida moderno y la naturaleza. Con 27 condominios diseñados para integrarse armoniosamente con el entorno. Descubre la armonía y tranquilidad que Caza Mabó tiene para ofrecer, donde la modernidad se encuentra con la belleza natural en un espacio que va más allá de un hogar')}}">
@endsection

@section('content')

    {{-- Inicio --}}
    <section class="position-relative">
        <img src="{{asset('img/fachada-alberca.webp')}}" alt="Fachada de Caza Mabó Sayulita" class="w-100" style="height: 100vh; object-fit:cover; object-position:bottom;">
        <div class="fondo-cafe"></div>

        <div class="row h-100 justify-content-center position-absolute start-0 top-0 z-3">
            <div class="col-12 col-lg-8 col-xxl-4 text-center align-self-center text-white">
                <h1 class="mb-4">{{__('Estilo de vida moderno, belleza y la armonía de la naturaleza.')}}</h1>
                <p class="mb-4">{{__('El diseño de este proyecto se enfoca en crear espacios que se integren perfectamente con el entorno, maximizando el uso de los espacios y permitiendo que los usuarios disfruten de la conexión directa con la naturaleza.')}}</p>
                <a href="#" class="btn w-100 btn-outline-light rounded-0">{{__('Inventario')}}</a>
            </div>
        </div>

    </section>

    {{-- Descripción --}}
    <section class="row justify-content-evenly my-5 bg-half-green" title="Descripción de Caza Mabó">

        <div class="col-12 mb-5 text-center">
            <img width="160px" src="{{asset('/img/wavy.svg')}}" alt="">
        </div>

        <div class="col-12 col-lg-5 align-self-center">
            <h2 class="text-white d-none d-lg-block">
                {{__('Conoce las características de')}} <br>
                Caza Mabó
            </h2>

            <h2 class="d-block d-lg-none text-center text-brown mb-4 fs-4">
                {{__('Conoce las características de')}} <br> Caza Mabó
            </h2>
        </div>

        <div class="col-11 col-lg-4 p-3 p-lg-5 shadow-4 bg-white text-lightbrown position-relative mb-5">
            <img src="{{asset('img/palm-leaf.webp')}}" class="position-absolute z-0 d-none d-lg-block" style="bottom:75%; right:85%;" alt="" loading="lazy">
            <p class="position-relative z-1">{{__('Caza Mabó es un proyecto arquitectónico que busca crear un espacio que combine la comodidad del estilo de vida moderno con la belleza y la armonía de la naturaleza. El diseño de este proyecto se enfoca en crear espacios que se integren perfectamente con el entorno, maximizando el uso de los espacios y permitiendo que los usuarios disfruten de la conexión directa con la naturaleza.')}}</p>
            <p class="mb-0 position-relative z-1">{{__('Una de las características principales de Caza Mabó es la presencia de grandes ventanales y balcones en cada una de las habitaciones y áreas comunes, lo que permite que la transición entre el interior y el exterior sea suave y natural. De esta manera, los usuarios pueden disfrutar del paisaje circundante en todo momento, generando una sensación de armonía y tranquilidad.')}}</p>
            <img src="{{asset('img/monstera-leaf.webp')}}" class="position-absolute z-0 d-none d-lg-block" style="top:80%; left:75%;" alt="" loading="lazy">
        </div>

        <div class="col-12 mb-5 text-center">
            <img width="160px" src="{{asset('/img/wavy.svg')}}" alt="">
        </div>

    </section>

    {{-- Inventario --}}
    <section class="position-relative mb-6">
        <div class="position-absolute top-0 start-0 ms-5 mt-5 text-white">
            <h3 class="fs-2">{{__('Unidades Disponibles')}}</h3>
            <a href="#" class="btn btn-outline-light rounded-0 px-5">{{__('Ver Inventario')}}</a>
        </div>

        <img src="{{asset('img/home-inventory.webp')}}" alt="Caza Mabó Inventory" class="w-100" loading="lazy">
    </section>

    {{-- Amenidades --}}
    <div class="d-flex justify-content-center my-5 bg-half-green">
        <div class="shadow-4 rounded-3 py-3 px-5 bg-white position-relative">
            <h3 class="text-lightbrown mb-0">{{__('Amenidades')}}</h3>
            <img width="100px" src="{{asset('img/leaves-min.webp')}}" alt="" class="position-absolute bottom-0" style="left:75%;" loading="lazy">
        </div>
    </div>

    <ul class="container row justify-content-center list-unstyled amenities text-lightbrown mb-5">
        <li class="col-6 col-lg-2 d-flex mt-2"><i class="fa-solid me-1 fa-diamond"></i> {{__('Alberca')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2"><i class="fa-solid me-1 fa-diamond"></i> 2 {{__('Restaurantes')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2"><i class="fa-solid me-1 fa-diamond"></i> {{__('Terraza Bar')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2"><i class="fa-solid me-1 fa-diamond"></i> {{__('Área Multiusos')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2"><i class="fa-solid me-1 fa-diamond"></i> {{__('Gimnasio')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2"><i class="fa-solid me-1 fa-diamond"></i> {{__('Seguridad')}}</li>

        <li class="col-6 col-lg-2 d-flex mt-2 mt-lg-4"><i class="fa-solid me-1 fa-diamond"></i> {{__('Fogatas')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2 mt-lg-4"><i class="fa-solid me-1 fa-diamond"></i> {{__('Yoga')}}</li>
        <li class="col-6 col-lg-3 d-flex mt-2 mt-lg-4"><i class="fa-solid me-1 fa-diamond"></i> {{__('Motor Lobby')}}</li>
        <li class="col-6 col-lg-2 d-flex mt-2 mt-lg-4"><i class="fa-solid me-1 fa-diamond"></i> {{__('Zona de Lectura')}}</li>
    </ul>

    <section class="row position-relative" title="Amenidades">

        <div class="col-6 px-0 position-relative">
            <a href="#amenities-1" class="fondo-cafe-amenities d-flex justify-content-center text-decoration-none">
                <div class="align-self-center">
                    <i class="fa-solid fa-4x fa-utensils"></i>
                    <div class="fs-3">{{__('Restaurantes')}}</div>
                </div>
            </a>
            <img src="{{asset('img/restaurante.webp')}}" alt="Restaurante de Caza Mabó" class="w-100" loading="lazy" style="height: 350px; object-fit:cover;" data-fancybox="amenities">
        </div>

        <div class="col-6 px-0 position-relative">
            <a href="#amenities-2" class="fondo-cafe-amenities d-flex justify-content-center text-decoration-none">
                <div class="align-self-center">
                    <i class="fa-solid fa-4x fa-water-ladder"></i>
                    <div class="fs-3">{{__('Albercas')}}</div>
                </div>
            </a>
            <img src="{{asset('img/pools.webp')}}" alt="Albercas de Caza Mabó" class="w-100" loading="lazy" style="height: 350px; object-fit:cover; object-position:bottom;" data-fancybox="amenities">
        </div>

        <div class="col-6 col-lg-4 px-0 position-relative">
            <a href="#amenities-3" class="fondo-cafe-amenities d-flex justify-content-center text-decoration-none">
                <div class="align-self-center">
                    <img width="64px" src="{{asset('img/yoga-icon.webp')}}" alt="">
                    <div class="fs-3">{{__('Yoga')}}</div>
                </div>
            </a>
            <img src="{{asset('img/yoga.webp')}}" alt="Yoga de Caza Mabó" class="w-100" loading="lazy" style="height: 300px; object-fit:cover;" data-fancybox="amenities">
        </div>

        <div class="col-6 col-lg-4 px-0 position-relative">
            <a href="#amenities-4" class="fondo-cafe-amenities d-flex justify-content-center text-decoration-none">
                <div class="align-self-center">
                    <i class="fa-solid fa-4x fa-dumbbell"></i>
                    <div class="fs-3">{{__('Gimnasio')}}</div>
                </div>
            </a>
            <img src="{{asset('img/gym.webp')}}" alt="Gimnasio de Caza Mabó" class="w-100" loading="lazy" style="height: 300px; object-fit:cover;" data-fancybox="amenities">
        </div>
        
        <div class="col-6 col-lg-4 px-0 position-relative">
            <a href="#amenities-5" class="fondo-cafe-amenities d-flex justify-content-center text-decoration-none">
                <div class="align-self-center">
                    <i class="fa-solid fa-4x fa-fire"></i>
                    <div class="fs-3">{{__('Fogatas')}}</div>
                </div>
            </a>
            <img src="{{asset('img/fire-pit.webp')}}" alt="Fogatas de Caza Mabó" class="w-100" loading="lazy" style="height: 300px; object-fit:cover;" data-fancybox="amenities">
        </div>

        <img src="{{asset('img/banana-leaf-left.webp')}}" alt="" class="position-absolute start-0 px-0" style="bottom:-25%; width: 250px;">

    </section>

    {{-- Ubicación --}}
    <section class="row justify-content-center py-5" style="background-image: url('{{asset('img/logo-bg.webp')}}')">

        <div class="col-12 col-lg-3 py-4 px-5 text-center shadow-7 text-lightbrown align-self-center bg-white">
            <i class="fa-solid fa-2x fa-location-dot"></i>
            <h4 class="fw-semibold mb-0">{{__('Ubicación')}}</h4>
            <address>Juan Escutia #14, Norte de Sayulita</address>
        </div>

        <div class="col-12 col-lg-7">
            <img src="{{asset('img/location.webp')}}" alt="Ubicación de Caza Mabó" loading="lazy" class="w-100 shadow-4" data-fancybox="location">
        </div>

    </section>

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