<nav class="navbar navbar-dark bg-transparent fixed-top navbar-expand-xxl py-2 py-lg-3" id="main-navbar">

    <div class="container-fluid">

        <a class="navbar-brand" href="{{route('home')}}">
            <img width="210px" class="px-3" src="{{asset('/img/logo-mabo-white.webp')}}" alt="Logo de Caza Mabó Sayulita">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end bg-brown" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header">
                <a href="{{route('home')}}" class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="{{asset('img/logo-mabo-white.webp')}}" alt="Logo de Caza Mabó Sayulita" class="w-100">
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 active fw-medium" href="{{route('inventory')}}">{{__('Inventario')}}</a>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 fw-medium" href="{{route('about')}}">{{__('Nosotros')}}</a>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 fw-medium" href="{{route('construction')}}">{{__('Avance de Obra')}}</a>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 fw-medium" href="{{route('contact')}}">{{__('Contacto')}}</a>
                    </li>

                    <li class="nav-item dropstart">
                        <a class="nav-link dropdown-toggle px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="{{asset('img/language-icon.webp')}}" alt="{{__('Cambiar de idioma')}}">
                        </a>

                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>

    </div>
</nav>