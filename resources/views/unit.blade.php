@extends('components.base')

@php
    if($unit->unitType->bedrooms < 1 ){
        $bedroom_text = __('1 Loft');
        $bedrooms = __('Estudio');
    }else{
        $bedroom_text = $unit->unitType->bedrooms . __('recámaras');
        $bedrooms = $unit->unitType->bedrooms;
    }
@endphp 

@section('titles')
    <title>{{__('Unidad')}} {{$unit->name}} - Caza Mabó</title>
    <meta name="description" content="{{__('Este condominio ofrece')}} {{$bedroom_text}} {{__('y')}} {{$unit->unitType->bathrooms}} {{__('baños de lujo, combinando comodidad y elegancia. Con')}} {{$unit->unitType->const_total}}m² 
    {{__('en total, cada rincón refleja la calidad excepcional.')}}
    {{__('Situado en el piso')}} {{$unit->floor}}, {{__('disfruta de vistas impresionantes y una conexión única con el entorno costero.')}}">
@endsection

@section('content')

    @php
        $images = $unit->unitType->getMedia('gallery');
    @endphp

    {{-- Inicio --}}
    <div class="position-relative mb-6">

        @if ( count($images) > 0)
            <img src="{{$images[0]->getUrl('large')}}" alt="{{__('Unidad')}} {{$unit->name}} - Caza Mabó" class="w-100" style="height:50vh; object-fit:cover;">
        @else
            <img src="{{ asset('img/fachada-alberca.webp') }}" alt="{{__('Unidad')}} {{$unit->name}} - Caza Mabó" class="w-100" style="height:50vh; object-fit:cover;">
        @endif
        
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

        <div class="col-12 col-lg-4 bg-white p-4 rounded-0 shadow-4 text-brown position-relative z-2">

            <div class="fs-0 d-flex justify-content-center">
                <small class="fs-5 align-self-center me-2">&#9670</small> 
                <h2 class="fs-max fw-bold"> <div class="text-center text-lg-end fs-6 fw-normal">{{__('Unidad')}}</div> {{$unit->name}} </h2>
                <small class="ms-2 fs-5 align-self-center">&#9670</small>
            </div>

            <div class="d-flex justify-content-center fs-5">
                <div><i class="fa-solid fa-bed"></i> {{$bedrooms}}</div>
                <div class="mx-3"><i class="fa-solid fa-toilet"></i> {{$unit->unitType->bathrooms}}</div>
                <div><i class="fa-solid fa-maximize"></i> {{$unit->unitType->const_total}}m²</div>
            </div>

            <img width="130px" src="{{asset('/img/leaves-min.webp')}}" alt="" class="position-absolute z-1" style="bottom: 70%; right:80%;" loading="lazy">
            <img width="130px" src="{{asset('img/banana-leaf-left.webp')}}" alt="" class="position-absolute bottom-0 start-100 d-none d-lg-block" loading="lazy">

        </div>

        <div class="col-12 col-lg-5 align-self-center text-white bg-green py-5 py-lg-0">
            <h3 class="fs-2">{{__('Unidad')}} {{$unit->name}} {{$unit->unitType->name}}</h3>

            <p class="fs-6 fw-light">
                {{__('Este condominio ofrece')}} {{$bedroom_text}} {{__('y')}} {{$unit->unitType->bathrooms}} {{__('baños de lujo, combinando comodidad y elegancia. Con')}} {{$unit->unitType->const_total}}m² 
                {{__('en total, cada rincón refleja la calidad excepcional.')}}
                {{__('Situado en el piso')}} {{$unit->floor}}, {{__('disfruta de vistas impresionantes y una conexión única con el entorno costero.')}}
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

    {{-- Planes de pago y Planos Arq. --}}
    <div class="row justify-content-evenly mb-6">

        <div class="col-12 col-lg-4 mb-5 mb-lg-0 align-self-center">
            <h3 class="fs-4 text-brown">{{__('Planos Arquitectónicos')}}</h3>

            @php
                $blueprint = '/media/'.$unit->unitType->blueprint_path;
            @endphp
            <img class="w-100" src="{{ asset($blueprint) }}" alt="{{__('Planos Arquitectónicos')}} {{__('Unidad')}} {{$unit->name}} Caza Mabó" data-fancybox="Blueprint" loading="lazy">
        </div>

        <div class="col-12 col-lg-5">
            <h4 class="fs-2 text-brown text-center">{{__('Planes de Pago')}}</h4>

            <ul class="nav nav-pills mb-3 justify-content-evenly" id="pills-tab" role="tablist">

                @php $i=1; @endphp
                @foreach ($unit->paymentPlans as $plan)

                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill @if($i==1) active @endif" id="pills-{{$plan->id}}-tab" data-bs-toggle="pill" data-bs-target="#pills-nav-{{$plan->id}}" type="button" role="tab">
                            @if (app()->getLocale() == 'es')
                                {{$plan->name}}
                            @else
                                {{$plan->name_en}}
                            @endif  
                        </button>
                    </li>
                    @php $i++; @endphp

                @endforeach

              </ul>

              <div class="tab-content mb-5" id="pills-tabContent">

                @php $j=0; @endphp
                @foreach($unit->paymentPlans as $plan)
                    <div class="tab-pane shadow-4 fade @if($j==0) show active @endif" id="pills-nav-{{$plan->id}}" role="tabpanel">

                        <h5 class="fs-4 text-brown text-center py-4">
                            @if (app()->getLocale() == 'es')
                                {{$plan->name}}
                            @else
                                {{$plan->name_en}}
                            @endif  
                        </h5>

                       @php
                            if($plan->discount){
                               $final_price = $unit->price * ( (100 - $plan->discount) / 100);
                            }
                            else{
                               $final_price = $unit->price;
                            }
                       @endphp 

                        <div class="bg-green py-4 text-center">
                            <div>{{__('Precio Final')}}</div>
                            <h5 class="fw-bold fs-2">${{ number_format($final_price) }} <small>{{$unit->currency}}</small> </h5>
                        </div>

                        @isset ( $plan->discount )
                            <div class="row fs-5 text-brown py-3">

                                <div class="col-6">
                                    {{__('Precio de Lista')}} 
                                    <i class="fa-regular fs-7 fa-circle-question" data-bs-toggle="tooltip" data-bs-title="{{__('Precio original sin descuento')}}"></i>
                                </div>

                                <div class="col-6 text-end text-decoration-line-through">
                                    ${{ number_format($unit->price) }} {{$unit->currency}}
                                </div>

                            </div>
                            <hr class="col-12 hr-green my-0">

                            <div class="row fs-5 text-brown py-3">

                                <div class="col-6">
                                    {{__('Descuento')}} ({{$plan->discount}}%)
                                </div>

                                <div class="col-6 text-end">
                                    ${{ number_format($unit->price * ($plan->discount/100)) }} {{$unit->currency}}
                                </div>

                            </div>
                            <hr class="col-12 hr-green my-0">
                        @endisset

                        @isset($plan->down_payment)
                            <div class="row fs-5 text-brown py-3">

                                <div class="col-6">
                                    {{__('Enganche')}} ({{$plan->down_payment}}%) 
                                    <i class="fa-regular fs-7 fa-circle-question" data-bs-toggle="tooltip" data-bs-title="{{__('Enganche a la firma del contrato de promesa de compra-venta')}}"></i>
                                </div>

                                <div class="col-6 text-end">
                                    ${{ number_format($final_price * ($plan->down_payment/100)) }} {{$unit->currency}}
                                </div>

                            </div>
                            <hr class="col-12 hr-green my-0">
                        @endisset

                        @isset($plan->second_payment)
                            <div class="row fs-5 text-brown py-3">

                                <div class="col-6">
                                    {{__('Segundo Pago')}} ({{$plan->second_payment}}%)
                                </div>

                                <div class="col-6 text-end">
                                    ${{ number_format($final_price * ($plan->second_payment/100)) }} {{$unit->currency}}
                                </div>

                            </div>
                            <hr class="col-12 hr-green my-0">
                        @endisset

                        @isset($plan->months_percent)
                            <div class="row fs-5 text-brown py-3">

                                <div class="col-6">
                                    {{__('Mensualidades')}} ({{$plan->months_percent}}%)
                                </div>

                                <div class="col-6 text-end">
                                    ${{ number_format($final_price * ($plan->months_percent/100)) }} {{$unit->currency}}
                                </div>

                            </div>
                            <hr class="col-12 hr-green my-0">
                        @endisset

                        @isset($plan->closing_payment)
                            <div class="row fs-5 text-brown py-3">

                                <div class="col-6">
                                    {{__('Pago Final')}} ({{$plan->closing_payment}}%)
                                    <i class="fa-regular fs-7 fa-circle-question" data-bs-toggle="tooltip" data-bs-title="{{__('Pago a la entrega física de la propiedad')}}"></i>
                                </div>

                                <div class="col-6 text-end">
                                    ${{ number_format($final_price * ($plan->closing_payment/100)) }} {{$unit->currency}}
                                </div>

                            </div>
                            <hr class="col-12 hr-green my-0">
                        @endisset
    

                    </div>
                    @php $j++; @endphp
                @endforeach
    
            </div>

        </div>

        <div class="col-12 col-lg-8 col-xxl-7 my-5">
            <ul class="fs-6 fw-light text-secondary">
                <li>{{__('El contrato de promesa de compra-venta tendrá que firmarse en un plazo máximo de diez días a partir de la firma de la Solicitud de Compra.')}}</li>
                <li>{{__('En caso de no proceder con la compra de la unidad en el tiempo establecido (firma de contrato y pago de enganche), la unidad quedará disponible.')}}</li>
                <li>{{__('Precios, descuentos y condiciones de pago sujetos a cambios sin previo aviso.')}}</li>
            </ul>
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