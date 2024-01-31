@extends('components.base')

@php
    if($unit->unitType->bedrooms < 1 ){
        $bedroom_text = __('1 Loft');
        $bedrooms = __('Studio');
    }else{
        $bedroom_text = $unit->unitType->bedrooms . __('recámaras');
        $bedrooms = $unit->unitType->bedrooms;
    }
@endphp 

@section('titles')
    <title>{{__('Unidad')}} {{$unit->name}} - Caza Mabó</title>
    <meta name="description" content="{{__('Este condominio ofrece')}} {{$bedroom_text}} y {{$unit->unitType->bathrooms}} {{__('baños de lujo, combinando comodidad y elegancia. Con')}} {{$unit->unitType->const_total}}m² 
    {{__('en total, cada rincón refleja la calidad excepcional. ')}}
    {{__('Situado en el piso')}} {{$unit->floor}}, {{__('disfruta de vistas impresionantes y una conexión única con el entorno costero. ')}}">
@endsection

@section('content')

    @php
        $images = $unit->unitType->getMedia('gallery');
    @endphp

    {{-- Inicio --}}
    <div class="position-relative mb-6">
        <img src="{{$images[0]->getUrl('large')}}" alt="{{__('Unidad')}} {{$unit->name}} - Caza Mabó" class="w-100" style="height:50vh; object-fit:cover;">
        
        <div class="fondo-cafe"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 h-100 z-3">
            <div class="col-12 col-lg-10 text-center text-white align-self-center">

                <h1>
                    <div class="fs-5 fw-light">{{__('Unidad')}} </div>
                    <div class="fs-0 d-flex justify-content-center">
                        <small class="fs-5 align-self-center me-2">&#9670</small> {{$unit->name}} <small class="ms-2 fs-5 align-self-center">&#9670</small>
                    </div>
                </h1>

            </div>
        </div>

    </div>

    {{-- Detalles --}}
    <div class="row justify-content-evenly mb-6 bg-mostly-green">

        <div class="col-12 col-lg-4 bg-white p-3 p-lg-4 rounded-0 shadow-4 text-brown position-relative z-2">

            <div class="fs-0 d-flex justify-content-center">
                <small class="fs-5 align-self-center me-2">&#9670</small> 
                <h2 class="fs-max fw-bold"> <div class="text-end fs-6 fw-normal">{{__('Unidad')}}</div> {{$unit->name}} </h2>
                <small class="ms-2 fs-5 align-self-center">&#9670</small>
            </div>

            <div class="d-flex justify-content-center fs-5">
                <div><i class="fa-solid fa-bed"></i> {{$bedrooms}}</div>
                <div class="mx-3"><i class="fa-solid fa-toilet"></i> {{$unit->unitType->bathrooms}}</div>
                <div><i class="fa-solid fa-maximize"></i> {{$unit->unitType->const_total}}m²</div>
            </div>

            <img width="130px" src="{{asset('/img/leaves-min.webp')}}" alt="" class="position-absolute z-1" style="bottom: 70%; right:80%;" loading="lazy">
            <img width="130px" src="{{asset('img/banana-leaf-left.webp')}}" alt="" class="position-absolute bottom-0 start-100" loading="lazy">

        </div>

        <div class="col-12 col-lg-5 align-self-center text-white">
            <h3 class="fs-2">{{__('Unidad')}} {{$unit->name}} {{$unit->unitType->name}}</h3>

            <p class="fs-6 fw-light">
                {{__('Este condominio ofrece')}} {{$bedroom_text}} y {{$unit->unitType->bathrooms}} {{__('baños de lujo, combinando comodidad y elegancia. Con')}} {{$unit->unitType->const_total}}m² 
                {{__('en total, cada rincón refleja la calidad excepcional. ')}}
                {{__('Situado en el piso')}} {{$unit->floor}}, {{__('disfruta de vistas impresionantes y una conexión única con el entorno costero. ')}}
            </p>
        </div>

    </div>

    {{-- Galería --}}
    <h3 class="fs-1 text-center mb-4 text-brown">{{__('Galería')}}</h3>
    <div class="row justify-content-center mb-6">
        <div class="col-12 col-lg-9 col-xxl-7 position-relative">

            <div id="carouselExample" class="carousel slide position-relative z-2 shadow-4">

                <div class="carousel-inner">

                    @php $i=1; @endphp

                    @foreach ($images as $img)
                        <div class="carousel-item @if($i==1) active @endif">
                            <img src="{{$img->getUrl('large')}}" class="d-block w-100" alt="{{__('Unidad')}} {{$unit->name}} - Caza Mabó">
                        </div>
                        @php $i++; @endphp
                    @endforeach
                
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

            </div>

            <img width="170px" src="{{asset('/img/diferent-leaves.webp')}}" alt="" class="position-absolute px-0 z-1" style="right:86%; bottom:87%;" loading="lazy">

        </div>
    </div>

    {{-- Formulario de contacto --}}
    @include('components.contact-form')

@endsection


@section('javascript')
    <script>
        var navbar = document.getElementById('main-navbar');
        var alturaDelViewport = (window.innerHeight/3);

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