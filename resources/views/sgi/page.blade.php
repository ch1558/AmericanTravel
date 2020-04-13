@extends('layouts.admin')

@section('title')
    ATI - Información página
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header" style="padding: 0px;">
                <h5 style="text-align:center; color:#66615B" class="card-title">Página principal - Sección ¿Por qué elegirnos?</h5>
            </div>
        </div>

        <div class="row">
            @for($i=0; $i < sizeof($principales); $i++)
                @php 
                    $title = explode(",",$principales[$i]->service_name);
                    $image = "image/".$principales[$i]->service_image;
                @endphp
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $title[0] }}</h5>
                            <p class="card-category">{{ $title[1] }}</p>
                        </div>
                        
                        <div class="card-body">
                            <img class="featurette-image img-fluid mx-auto" src="{{ asset($image) }}" style="align-content: center;" alt="atiimage" style="width: 250px; height: 250px;" data-holder-rendered="true">
                            <br><br>
                            <p>{{ $principales[$i]->service_description }}</p>
                        <div>

                        <div class="card-footer">                      
                            <div class="stats" style="width: 80%; margin: 0px auto;">
                                <button class="btn btn-success btn-round" style="width:100% !important;">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            @endfor
        </div>

        <hr style="margin: 2rem 0rem;"> 

        <!-- Seccion de comentarios -->
        <div class="card">
            <div class="card-header" style="padding: 0px;">
                <h5 style="text-align:center; color:#66615B" class="card-title">Página principal sección "Te podría interesar"</h5>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="table responsive">
                    <table class="table">
                        <thead class="text-danger">
                            <tr>
                                <th>Título</th>
                                <th>Subtitulo</th>
                                <th>Descripción</th>
                                <th>Imagen</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @for($i=0; $i< sizeof($comments) ; $i++)
                                @php $photo = "image/".$comments[$i]->informative_image; @endphp
                                <tr>
                                    <td>{{ $comments[$i]->informative_name }}</td>
                                    <td>{{ $comments[$i]->informative_subname }}</td>
                                    <td>{{ $comments[$i]->informative_description }}</td>
                                    <td><img class="featurette-image img-fluid mx-auto" src="{{ asset($photo) }}" style="align-content: center; width: 70px !important; height: 70px!important;" alt="ati.image" data-holder-rendered="true"></td>
                                    <td><button _ngcontent-c4="" class="btn btn-success btn-round" type="button">Editar</button></td>
                                    <td><button _ngcontent-c4="" class="btn btn-warning btn-round" type="button">Eliminar</button></td>
                                <tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="card-footer">
                <div class="row justify-content-end">
                    <div class="col-md-4 col-xs-12">
                        <button type="submit" name="registrar" style="width:100% !important;" value="comprar" class="btn btn-success">Añadir comentario</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin de seccion de comentarios -->

        <hr style="margin: 2rem 0rem;">

        <!-- Seccion de servicios-II -->
        <div class="card">
            <div class="card-header" style="padding: 0px;">
                <h5 style="text-align:center; color:#66615B" class="card-title">Página principal sección servicios ATI</h5>
            </div>
        </div>

        <div class="row">
            @for($i=0; $i < sizeof($segundarios); $i++)
                @php 
                    $image = "image/".$segundarios[$i]->service_image;
                @endphp
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title" style="text-align:center;">{{ $segundarios[$i]->service_name }}</h5>
                        </div>
                        
                        <div class="card-body">
                            <div class="mx-auto" style="width:64px">
                                <img class="featurette-image img-fluid mx-auto" src="{{ asset($image) }}" alt="atiimage" style="width: 64px; height: 64px;" data-holder-rendered="true">
                            </div>
                            <br><br>
                            <p style="text-align:justify; font-size:15px;">{{ $segundarios[$i]->service_description }}</p>
                        <div>

                        <div class="card-footer">                      
                            <div class="stats" style="width: 80%; margin: 0px auto;">
                                <button class="btn btn-success btn-round" style="width:100% !important;">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            @endfor
        </div>
        <!-- fin de seccion de servicios-II -->

        <hr style="margin: 2rem 0rem;">

        <!-- Seccion de servicios-II -->
        <div class="card">
            <div class="card-header" style="padding: 0px;">
                <h5 style="text-align:center; color:#66615B" class="card-title">Seccion de Contacto</h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7" id="google-maps">
                            <iframe id="dash_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0697443283234!2d-72.50788798572883!3d7.8877723079892155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e665ab576e9fcc1%3A0xb5311f1fd0868112!2sAtlantis+Centro+Comercial!5e0!3m2!1ses!2sco!4v1558493853530!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-5">
                            @php 
                                $image = "image/".$contacto->contact_logo;
                            @endphp
                            <div class="mx-auto">
                                <img class="featurette-image img-fluid mx-auto" style="height: 120px;" src="{{ asset($image) }}" alt="atiimage" data-holder-rendered="true">
                            </div>
                            <h4>Información de contacto</h4>
                            <ul class="colorlib-footer-links">
                                <li>{{ $contacto->contact_location }}</li>
                                @php 
                                    $numbers = explode('(+57)',$contacto->contact_phone);
                                @endphp
                                @for($i=1; $i < sizeof($numbers); $i++)
                                    <li>(+57) {{ $numbers[$i] }}</li>
                                @endfor
                                <li>{{$contacto->contact_email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin de seccion de servicios-II -->

    </div>
@endsection

@section('scripts')

@endsection