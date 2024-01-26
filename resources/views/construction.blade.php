@extends('components.base')

@section('titles')
    <title>{{__('Avances de Obra')}} - Caza Mabó</title>
    <meta name="description" content="{{__('Aquí podrás consultar el progreso mensual de construcción de Caza Mabó, con imágenes y videos del trabajo y avance general.')}}">
@endsection

@section('content')

    <div class="d-flex justify-content-center my-6 bg-half-green">
        <div class="shadow-4 rounded-3 py-3 px-5 bg-white position-relative">
            <h1 class="text-lightbrown mb-0 fs-2">{{__('Avances de obra')}}</h1>
            <img width="100px" src="{{asset('img/leaves-min.webp')}}" alt="" class="position-absolute bottom-0" style="left:80%;" loading="lazy">
        </div>
    </div>

    @if ( count($updates) > 0 )
    
        <div class="row justify-content-center mb-5">
            @foreach ($updates as $update)
                <div class="card rounded-0 col-12 col-lg-8 col-xxl-7 mb-5 p-0">
                    
                    @php
                        $portrait = asset('/media/'.$update->portrait_path);
                        $date = __(date_format($update->date, 'F')).' '.date_format($update->date, 'Y');
                        $images = $update->getMedia('gallery_construction');
                    @endphp

                    <div class="position-relative">
                        <img src="{{$portrait}}" class="w-100" alt="Avance de Obra Caza Mabó - {{$date}}" style="max-height: 470px; object-fit:cover;">
                        <div class="row position-absolute top-0 start-0 justify-content-center h-100">
                            <div class="col-12 text-center align-self-center">
                                <a href="#construction-{{$update->id}}-1" class="link-light" aria-label="Ver avance de obra de {{$date}}"><i class="fa-solid fa-4x fa-play"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-brown d-flex">
                        <img class="me-4" src="{{asset('/img/logo-minimized.webp')}}" alt="" width="100px">
                        
                        <h2 class="mb-0 lh-1">{{$date}} <br> <span class="fs-5">Avance de Obra</span> </h2>
                        
                    </div>

                    @if ($update->video_link)
                        <a href="{{$update->video_link}}" data-fancybox="construction-{{$update->id}}" class="d-none">Video de avance de obra Caza Mabó - {{$date}}</a>
                    @endif

                    @foreach ($images as $image)
                        <img src="{{$image->getUrl('large')}}" alt="Avance de Obra Caza Mabó - {{$date}}" class="w-100 d-none" data-fancybox="construction-{{$update->id}}">
                    @endforeach
                      
                </div>
            @endforeach
        </div>

        {{ $updates->links() }}

    @else
        
    @endif
    
@endsection


@section('javascript')
    <script>
        var navbar = document.getElementById('main-navbar');
        navbar.classList.add('bg-brown');
        navbar.classList.remove('bg-transparent');
        navbar.classList.remove('fixed-top');
        navbar.classList.add('sticky-top');
    </script>
@endsection