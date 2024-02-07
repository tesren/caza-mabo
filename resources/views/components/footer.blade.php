{{-- Botón de WhatsApp --}}
<a id="whatsapp" href="https://wa.me/5213322005523?text={{ urlencode(__('Hola, vengo del sitio web de Caza Mabó')) }}" target="_blank" rel="noopener noreferrer"
    class="text-decoration-none position-fixed d-flex justify-content-center shadow-4 rounded-circle text-white z-3 shadow-3" 
    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Envíanos un mensaje')}}">

    <i class="fa-brands align-self-center fa-whatsapp"></i>
</a>

{{-- Pie de página --}}
<footer>

    <div class="py-5 bg-brown row justify-content-evenly">

        <div class="col-9 col-lg-3 col-xxl-2 text-center mb-4 mb-lg-0">
            <img src="{{asset('img/mabo-logo-full.webp')}}" alt="Caza Mabó Logo" class="w-100">
        </div>

        <div class="col-12 col-lg-3 mb-4 mb-lg-0 text-center text-lg-start">
            <div class="fs-5 fw-semibold">{{__('Contacto')}}</div>
            <a href="mailto:info@domusvallarta.com" class="text-decoration-none link-light fw-light"><i class="fa-regular fa-envelope"></i> info@domusvallarta.com</a>
            <a href="tel:+523322005523" class="text-decoration-none link-light fw-light d-block"><i class="fa-solid fa-phone"></i> +52 332 200 5523</a>

            <div class="fs-5 fw-semibold mt-3">{{__('Dirección')}}</div>
            <address><i class="fa-solid fa-location-dot"></i> Juan Escutia #14, Norte de Sayulita, Nayarit</address>
        </div>

        <div class="col-12 col-lg-2 text-center text-lg-start">
            <div class="fs-5 fw-semibold mb-2">{{__('Redes Sociales')}}</div>

            <a href="https://www.facebook.com/DomusVallartaInmobiliaria" class="text-decoration-none link-light me-2" target="_blank" rel="noopener noreferrer" aria-label="Facebook Page">
                <i class="fa-brands fa-2x fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/domus_vallarta/" class="text-decoration-none link-light" target="_blank" rel="noopener noreferrer" aria-label="Instagram profile">
                <i class="fa-brands fa-2x fa-instagram"></i>
            </a>

            <a href="https://domusvallarta.com/" class="text-decoration-none link-light">
                <div class="mt-4 mt-lg-2 mb-2">{{__('Comercializador Exclusivo')}}</div>
                <img src="{{asset('/img/domus-logo-white.svg')}}" alt="Domus Vallarta Inmobiliaria" class="w-75">
            </a>

        </div>

    </div>

    <div class="py-2 bg-lightbrown text-center fs-7">
        ©Copyright 2024. {{__('Todos los derechos reservados por')}} Caza Mabó
        <a href="{{route('privacy')}}" class="link-light border-start border-white ps-2">{{__('Políticas de Privacidad')}}</a>
    </div>

</footer>