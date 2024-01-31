@extends('components.base')

@section('titles')
    <title>{{__('Contacto')}} - CAZA MABÓ Sayulita</title>
    <meta name="description" content="{{__('¿Listo para dar el paso hacia tu retiro tropical o una inversión única? ¡Contáctanos hoy y descubre cómo puedes ser parte de esta experiencia inigualable en el corazón de la Riviera Nayarit!')}}">
@endsection

@section('content')

    <div class="position-relative">

        <img class="w-100" src="{{asset('/img/caza-mabo-front.webp')}}" alt="Fachada de Caza Mabó" style="height:50vh; object-fit:cover;">

        <div class="fondo-cafe"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 h-100 z-3">

            <div class="col-12 text-center text-white align-self-center">
                <h1 class="fs-0">{{__('Contacto')}}</h1>
            </div>

        </div>

    </div>

    <div class="container my-6">
        <h2 class="fs-2 text-lightbrown px-2 mb-4">{{__('Mantente en contacto')}}</h2>

        {{-- Formulario --}}
        <form action="{{route('send.email')}}" method="post" onsubmit="disableBtn()">
            @csrf
        
            <div class="row">

                <div class="col-12">
                    <label for="full_name">{{__('Nombre')}}</label>
                    <input type="text" name="full_name" id="full_name" class="contact-input mb-3" required value="{{old('full_name')}}">
                </div>

                <x-honeypot/>

                <div class="col-12 col-lg-6">
                    <label for="email">{{__('Correo')}}</label>
                    <input type="email" name="email" id="email" class="contact-input mb-3" required value="{{old('email')}}">
                </div>

                <div class="col-12 col-lg-6">
                    <label for="phone">{{__('Teléfono')}}</label>
                    <input type="tel" name="phone" id="phone" class="contact-input mb-3" required value="{{old('phone')}}">
                </div>

                <div class="col-12">
                    <textarea name="message" id="message" cols="30" class="contact-input mb-4" rows="3" placeholder="{{__('Mensaje')}}">{{old('message')}}</textarea>
                </div>

                <input type="hidden" name="url" id="url" value="{{ request()->fullUrl() }}">

                <div class="col-12 mb-5">
                    <button type="submit" id="submit-btn" class="btn btn-outline-brown w-100" @if(session('message')) disabled @endif>
                        {{__('Enviar')}}
                    </button>
                </div>

            </div>

        </form>

        {{-- Mensaje de éxito --}}
        @if (session('message'))
            <div class="p-3 text-success fw-semibold">
                <i class="fa-regular fa-circle-check"></i> {{__(session('message'))}}
            </div>
        @endif

        {{-- Errores --}}
        @if (session('errors'))
            @php
                $errors = session('errors');
            @endphp
            <div class="p-3 text-danger">
                @foreach ($errors as $error)
                    <div class="mb-2"><i class="fa-regular fa-circle-xmark"></i> {{$error}}</div>
                @endforeach
            </div>
        @endif

        {{-- Javascript --}}
        <script>
            function disableBtn(){
                let submitButton = document.getElementById('submit-btn');
                submitButton.disable = true; 
            }
        </script>
    </div>

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