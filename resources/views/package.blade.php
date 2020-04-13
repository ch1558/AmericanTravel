@extends('layouts.base')

@section('title')
    ATI - Destinos
@endsection

@section('content')

    <div id="page">
        <!-- Barra de navegación -->
        @include('partials.navbar')
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(../image/package.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Nuestros planes</h2>
                                        <h1>¡Hemos escogido lo mejor para ti!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <section>
    </section>

@endsection

@section('scripts')
@endsection