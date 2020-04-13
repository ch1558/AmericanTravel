@extends('layouts.base')

@section('title')
    American Travel Internacional
@endsection

@section('content')

    <div id="page">
        <!-- Barra de navegación -->
        @include('partials.navbar')
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url({{ asset('image/bg-promo.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>San andres</h2>
                                        <h1>Amazing Maldives Tour</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{ asset('image/desti.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>10 Days Cruises</h2>
                                        <h1>From Greece to Spain</h1>
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
                    <p class="lead mb-5">“Nuestro destino nunca es un lugar, sino una nueva forma de ver las cosas”. – <a
                            href="">Henry Miller</a></p>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            @for($i=0; $i < sizeof($principales); $i++)
                @php 
                    $text = $i%2==0 ? 'order-md-0' : 'order-md-1';
                    $img = $i%2==0 ? 'order-md-1' : 'order-md-0';
                    $title = explode(",",$principales[$i]->service_name);
                    $image = "image/".$principales[$i]->service_image;
                @endphp
                <div class="row align-items-center featurette"> 
                    <div class="col-md-8 {{ $text }}">
                        <h2 class="featurette-heading">{{ $title[0] }} <span class="text-muted"> {{ $title[1] }}</h2>
                        <p>{{ $principales[$i]->service_description }}</p>
                    </div>
                    <div class="col-md-4 {{ $img }}">
                        <img class="featurette-image img-fluid mx-auto" src="{{ asset($image) }}" style="align-content: center;"
                            alt="ati.image" style="width: 250px; height: 250px;" data-holder-rendered="true">
                    </div>
                </div>
                <br>
            @endfor
        </div>
    </section>
    <br>
    <br>

    <div id="colorlib-testimony" class="colorlib-light-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center colorlib-heading">
					<h2>Te podria interesar</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-2 animate-box">						
					<div class="owl-carousel2">
                        @for($i=0; $i < sizeof($comments); $i++)
                            @php $photo = "image/".$comments[$i]->informative_image; @endphp
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url({{ asset($photo) }});"></span>
                                    <span class="user">{{ $comments[$i]->informative_name }}</span>
                                    <small>{{ $comments[$i]->informative_subname }}</small>
                                    <blockquote>
                                        <p> {{ $comments[$i]->informative_description }} </p>
                                    </blockquote>
                                </div>
                            </div>
                        @endfor
					</div>
				</div>	
			</div>
        </div>
    </div>

    <div id="page">

        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    @for($i=0; $i < sizeof($segundarios); $i++)
                        @php $icon = "image/".$segundarios[$i]->service_image; @endphp
                        <div class="col-lg-3 col-md-6 animate-box text-center">
                            <div class="services">
                                <span class="icon">
                                    <i id="flaticon_img" style="background-image: url({{ asset($icon) }});"></i>
                                </span>
                                <h3>{{ $segundarios[$i]->service_name }}</h3>
                                <p>{{ $segundarios[$i]->service_description }}</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <br>
        <div id="colorlib-subscribe" style="background-image: url({{ asset('image/img_bg_4.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center colorlib-heading animate-box">
                        <h2>Suscribete para mantenerte informado.</h2>
                        <p>Registra tu correo electrónico para estar atento a ofertas especiales hechas a tu medida.</p>
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-10 col-md-8 col-lg-5 align-self-center">
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email" style="height: 52px;">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
@endsection