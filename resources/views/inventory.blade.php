@extends('components.base')

@section('titles')
    <title>{{__('Inventario')}} - Caza Mabó</title>
    <meta name="description" content="{{__('Explora la diversidad de opciones que te ofrece nuestro inventario de condominios en Sayulita, Nayarit. Cada residencia es una expresión única de elegancia costera y comodidad moderna, diseñada para capturar la esencia del paraíso en cada detalle.')}}">
@endsection

@section('content')

    {{-- Simbología en móvil --}}
    <div class="d-block d-lg-none mb-5 mt-4 text-center">
        <h1 class="mb-0 text-brown">{{__('Condominios Disponibles')}}</h1>
        <p class="fw-light">{{__('Selecciona una unidad para más información')}}</p>
        <div class="d-flex justify-content-center">

            <div class="rounded-pill bg-white text-brown overflow-hidden me-3 shadow-4">
                <span class="rounded-start-pill bg-success col-2 text-success py-2">---</span>
                <span class="col-10 pe-2 fs-5">{{__('Disponible')}}</span>
            </div>

            <div class="rounded-pill bg-white text-brown overflow-hidden me-3 shadow-4">
                <span class="rounded-start-pill bg-warning col-2 text-warning py-2">---</span>
                <span class="col-10 pe-2 fs-5">{{__('Apartada')}}</span>
            </div>

            <div class="rounded-pill bg-white text-brown overflow-hidden shadow-4">
                <span class="rounded-start-pill bg-danger col-2 text-danger py-2">---</span>
                <span class="col-10 pe-2 fs-5">{{__('Vendida')}}</span>
            </div>
        
        </div>

    </div>

    <div class="position-relative mb-6">

        {{-- Simbología --}}
        <div class="row position-absolute top-0 start-0 z-2 pt-5 ps-5 d-none d-lg-block">

            <div class="col-12 col-lg-4 text-white">
                <h1 class="mb-0">{{__('Condominios Disponibles')}}</h1>
                <p class="fw-light">{{__('Selecciona una unidad para más información')}}</p>
                <div class="d-flex">

                    <div class="rounded-pill bg-white text-brown overflow-hidden me-3">
                        <span class="rounded-start-pill bg-success col-2 text-success py-2">---</span>
                        <span class="col-10 pe-2 fs-5">{{__('Disponible')}}</span>
                    </div>

                    <div class="rounded-pill bg-white text-brown overflow-hidden me-3">
                        <span class="rounded-start-pill bg-warning col-2 text-warning py-2">---</span>
                        <span class="col-10 pe-2 fs-5">{{__('Apartada')}}</span>
                    </div>

                    <div class="rounded-pill bg-white text-brown overflow-hidden">
                        <span class="rounded-start-pill bg-danger col-2 text-danger py-2">---</span>
                        <span class="col-10 pe-2 fs-5">{{__('Vendida')}}</span>
                    </div>
                
                </div>
            </div>

        </div>

        <img src="{{asset('img/home-inventory.webp')}}" alt="Condominios disponibles en Caza Mabó Sayulita" class="w-100">


        {{-- Inventario --}}
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0" viewBox="0 0 1920 1150">
            @foreach ($units as $unit )

                <a href="{{route('unit', ['unit'=>$unit->name, 'contact'=>request()->query('contact') ] )}}" class="unit-square text-decoration-none position-relative">
                    
                    <rect class="unit-{{strtolower($unit->status)}}" x="{{ $unit->shape->rect_x ?? '0' }}" y="{{ $unit->shape->rect_y ?? '0' }}" height="{{ $unit->shape->height ?? '0' }}" width="{{ $unit->shape->width ?? '0'}}"></rect>
                    
                    <text x="{{$unit->shape->text_x ?? 0;}}" 
                        y="{{$unit->shape->text_y ?? 0; }}"
                        font-size="32" font-weight="bold" fill="#fff" class="fw-light">

                        &#8900 {{$unit->name}} &#8900

                        @php
                            if($unit->unitType->bedrooms < 1){
                                $type_x = ($unit->shape->text_x ?? 0) + 27;
                            }
                            elseif($unit->unitType->bedrooms == 1)
                                $type_x = ($unit->shape->text_x ?? 0) +16;
                            elseif($unit->unitType->name == 'Doble')
                                $type_x = ($unit->shape->text_x ?? 0) + 20;
                            elseif($unit->unitType->name == 'Doble + Flex + Hall')
                                $type_x = ($unit->shape->text_x ?? 0) - 35;
                            else {
                                $type_x = ($unit->shape->text_x ?? 0) - 5;
                            }
                        @endphp

                        <tspan x="{{$type_x}}" dy="1.2em" font-size="20" font-weight="light">
                            {{ __($unit->unitType->name) }}
                        </tspan>
                        
                    </text>
                    
                </a>
            @endforeach
        </svg>


    </div>

    <div class="text-center">
        <img width="200px" class="mx-auto" src="{{asset('img/wavy.svg')}}" alt="">
    </div>
    
    {{-- Formulario de contacto --}}
    <div class="mb-5 mt-6">
        @include('components.contact-form')
    </div>

@endsection


@section('javascript')
    <script>
        var navbar = document.getElementById('main-navbar');
        navbar.classList.add('bg-brown');
        navbar.classList.add('shadow-4');
        navbar.classList.add('sticky-top');
        navbar.classList.remove('bg-transparent');
        navbar.classList.remove('fixed-top');
    </script>
@endsection