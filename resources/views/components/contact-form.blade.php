<section class="row" title="Formulario de contacto" id="contact_section">

    <div class="col-12 col-lg-4 px-0 @if(Route::currentRouteName() == 'es.inventory' or Route::currentRouteName() == 'en.inventory') d-none d-lg-block @endif ">
        <img src="{{asset('img/contact-form.webp')}}" alt="Caza Mabó" loading="lazy" class="w-100">
    </div>

    <div class="col-12 col-lg-1"></div>

    <div class="col-12 col-lg-5 align-self-center mt-4 mt-lg-0">

        <h6 class="fs-2 text-brown px-2 mb-0">{{__('¿Te gustaría saber más?')}}</h6>
        <p class="fs-7 text-lightbrown px-2 mb-4">{{__('Completa el formulario y nuestros asesores se pondrán en contacto contigo.')}}</p>

        {{-- Formulario --}}
        <form action="{{route('send.email')}}#contact_section" method="post" onsubmit="disableBtn()">
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
            <div class="p-3 text-success fw-semibold fs-5 text-center mb-4">
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
                const msgButton = document.getElementById("submit-btn");
                msgButton.setAttribute("disabled", "true");
            }
        </script>

    </div>

</section>