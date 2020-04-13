@extends('layouts.base')

@section('title')
    ATI - Servicios
@endsection

@section('content')

    <div id="page">
        <!-- Barra de navegación -->
        @include('partials.navbar')
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url({{ asset('image/bg_services.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Servicios</h2>
                                        <h1>¡Los tenemos para ti!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <section class="content-section" id="aboutUs">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1>American Travel Internacional</h1>
                    <p class="lead mb-5">Nuestro portafolio de servicios esta diseñado para que disfrutes al máximo tus viajes.</p>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            @for($i=0; $i < sizeof($servicios); $i++)
                @php 
                    $text = $i%2==0 ? 'order-md-0' : 'order-md-1';
                    $img = $i%2==0 ? 'order-md-1' : 'order-md-0';
                    $title = explode(",",$servicios[$i]->service_name);
                    $image = "image/".$servicios[$i]->service_image;
                @endphp
                <div class="row align-items-center featurette"> 
                    <div class="col-md-8 {{ $text }}">
                        <h2 class="featurette-heading">{{ $title[0] }} <span class="text-muted"> {{ $title[1] }}</h2>
                        <p>{{ $servicios[$i]->service_description }}</p>
                    </div>
                    <div class="col-md-4 {{ $img }}">
                        <img class="featurette-image img-fluid mx-auto" src="{{ asset($image) }}" style="align-content: center;" alt="ati.image" style="width: 250px; height: 250px;" data-holder-rendered="true">
                    </div>
                </div>
                <br>
            @endfor
        </div>
    </section>
    <br>
    <br>

@endsection

@section('scripts')
@endsection