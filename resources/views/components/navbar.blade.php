<nav class="navbar navbar-dark bg-transparent fixed-top navbar-expand-xxl z-3 py-2 py-lg-3" id="main-navbar">

    <div class="container-fluid">

        <a class="navbar-brand" href="{{route('home')}}">
            <img width="230px" class="px-3" src="{{asset('/img/logo-mabo-white.webp')}}" alt="Logo de Caza Mabó Sayulita">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header">
                <div class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 active fw-medium" href="#">Inventario</a>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 fw-medium" href="#">Nosotros</a>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 fw-medium" href="#">Avance de Obra</a>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link white-line px-4 fw-medium" href="#">Contacto</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ps-4 fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                    
                    </li>
                </ul>

            </div>
        </div>

    </div>
</nav>