@extends('layouts.base')

@section('title')
    ATI - Políticas de privacidad
@endsection

@section('content')

    <div id="page">
        <!-- Barra de navegación -->
        @include('partials.navbar')
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url({{ asset('image/poli.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Políticas de privacidad</h2>
                                        <h1>De esta forma tratamos tus datos</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <section class="content-section">
        <div class="container text-center">
            <div class="row" id="politicas">
                <div class="col-lg-10 mx-auto">
                    <h1>Política de protección de datos personales de clientes y usuarios</h1>
                    <p class="lead mb-5" style="font-size: 18px; text-align: justify;">En cumplimiento a la estipulado en la ley 1581 del 2012 y reglamentado parcialmente 
                        por el Decreto Nacional 1377 del 2013 en el cual se dictan las disposiciones generales para la protección 
                        de datos personales, AMERICAN TRAVEL INTERNACIONAL agencia de viajes y turismo, garantiza que la información 
                        de datos suministrada y autorizada por nuestros usuarios, clientes y proveedores, se encuentran almacenada 
                        internamente. Esta información podrá ser utilizada única y exclusivamente por american travel internacional.
                    </p>
                </div>
            </div>
        <div>
        <br>
        @php 
            $numbers = explode('(+57)',$contacto->contact_phone);
        @endphp
        <div class="container">
            <div class="row">
                <div id="about-info" class="col-md-8">
                <!--Ubicacion -->
                    <h1 style="text-align: left;" id="ubicacion" class="featurette-heading">Ubicación</h1>
                    <p style="text-align: justify; font-size: 16px;">American travel internacional se encuentra ubicada en 
                        {{ $contacto->contact_location }}; y tiene dispuestos como canales de contacto con sus clientes,
                        usuarios y proveedores además de las comunicaciones escritas dirigidas a su domicilio, las líneas telefónicas 
                        @for($i=1; $i < sizeof($numbers); $i++)
                            (+57) {{ $numbers[$i] }}
                            @if($i+1< sizeof($numbers)) - @endif
                        @endfor
                    </p>
                <!-- fin ubicacion -->

                <!-- Información -->
                    <h1 style="text-align: left;" id="informacion" class="featurette-heading">Finalidades de la información</h1>
                    <p style="text-align: justify; font-size: 16px;">El tratamiento de estos datos se utilizará para los siguientes fines:</p>
                    <ul>
                        <li id="list-priva">Ser contactado para realizar la gestión de renovación y ventas nuevas</li>
                        <li id="list-priva">Ofrecimiento de productos y servicios</li>
                        <li id="list-priva">Ser informado e invitado a participar en diferentes concursos, eventos y promociones</li>
                        <li id="list-priva">Para la prestación adecuada de los servicios y/o productos contratados con American Travel Internacional</li>
                        <li id="list-priva">Enviarle información comercial, promocional, invitaciones o atenciones de la compañía o de terceros aliados</li>
                        <li id="list-priva">Realizar encuestas y/o sondeos de opinión sobre los productos, contenidos y promociones</li>
                        <li id="list-priva">Realizar análisis de mercado objetivo, de consumo y preferencias</li>
                        <li id="list-priva">Realizar evaluaciones de la calidad de los productos y servicios que ofrecemos</li>
                    </ul>
                <!-- fin informacion -->

                <!-- Derechos -->
                    <h1 style="text-align: left;" id="derechos" class="featurette-heading">Derechos de los Cliente, Usuarios y/o Proveedores</h1>
                    <ul>
                        <li>
                            <p style="text-align: justify; font-size: 16px;">Dirigirse a American travel internacional, a través de los canales establecidos 
                                por ésta, los cuales se indican en la Política de protección de datos personales, con el fin de conocer, actualizar, rectificar y suprimir 
                                sus datos personales. Este derecho se podrá ejercer, entre otros frente a datos parciales, inexactos, incompletos, fraccionados, que 
                                induzcan a error o aquellos cuyo tratamiento esté expresamente prohibido o no haya sido autorizado.
                            </p>
                        </li>
                        <li>
                            <p style="text-align: justify; font-size: 16px;">Ser informado por American travel internacional., previa solicitud efectuada a través de los 
                                canales dispuestos por American travel internacional, respecto del uso que ésta le ha dado a sus datos personales.
                            </p>
                        </li>
                        <li>
                            <p style="text-align: justify; font-size: 16px;">Revocar, en aquellos casos que no se enmarcan bajo la Ley Especial de Hábeas Data la 
                                autorización y/o solicitar la supresión del dato cuando en el tratamiento no se respeten los principios, derechos y garantías constitucionales y legales.
                            </p>
                        </li>
                        <li>
                            <p style="text-align: justify; font-size: 16px;">Acceder en forma gratuita, a través de los canales dispuestos por American travel internacional, a sus 
                                datos personales que hayan sido objeto de tratamiento.
                            </p>
                        </li>
                    </ul>
                <!-- fin derechos -->

                <!-- Reclamos -->
                    <h1 style="text-align: left;" id="reclamos" class="featurette-heading">Mecanismos y procedimientos para ejercer los derechos de consulta y reclamo</h1>
                    <p style="text-align: justify; font-size: 16px;">Con el fin de que usted formule sus solicitudes de consultas, reclamos y/o supresión de su información, 
                        American travel internacional ha dispuesto los siguientes puntos de atención:</p>
                    <p style="text-align: justify; font-size: 16px;"> Línea teléfonica 
                        @for($i=1; $i < sizeof($numbers); $i++)
                            (+57) {{ $numbers[$i] }}
                            @if($i+1< sizeof($numbers)) - @endif
                        @endfor
                    </p>
                    <p style="text-align: justify; font-size: 16px;">Le informamos que tanto para consultas como reclamos deberá acreditar que usted 
                        es el Titular de los datos, adjuntando copia de su documento de identidad, su dirección física o electrónica en la cual desea 
                        recibir la respuesta o habérsele, realizado la validación interna de la información cuando se utilice otro medio.
                    </p>
                    <p style="text-align: justify; font-size: 16px;">En el caso en que falte alguno de los requisitos aquí establecidos, se le 
                        informará dentro de los cinco (5) días siguientes a la recepción de las solicitudes para que los complete, si no los subsana 
                        no se podrá dar trámite a su solicitud. En el caso de los reclamos, transcurridos dos (2) meses desde la fecha del requerimiento 
                        sin que sean subsanados se entenderá que ha desistido del mismo.
                    </p>
                    <p style="text-align: justify; font-size: 16px;">Los plazos para obtener sus respuestas en el caso de consultas es de diez (10) 
                        días hábiles contados a partir de la fecha de su recibo, que podrá ser prorrogado por cinco (5) días hábiles más y quince (15) 
                        días hábiles en los reclamos, que podrá ser prorrogado por ocho (8) días hábiles más de conformidad con lo que dispone la Ley.
                    </p>
                <!-- fin reclamos -->

                <!-- autorizaciones -->
                    <h1 style="text-align: left;" id="autorizacion" class="featurette-heading">Autorizaciones de los clientes y/o usuario</h1>
                    <p style="text-align: justify; font-size: 16px;">Al aceptar las condiciones y política de privacidad de la información el usuario, 
                        cliente y/o proveedor, American travel internacional conservará y administrará la siguiente información:
                    </p>
                    <p style="text-align: justify; font-size: 16px;">Nombre, cédula o nit, edad, ciudad, cargo, email, profesión, teléfonos, actividad 
                        económica, dirección, fecha de cumpleaños, sus gustos y su tecnología, además de todos los datos suministrados por usted y que 
                        consideremos necesarios para efectuar nuestra actividad económica.
                    </p>
                    <p style="text-align: justify; font-size: 16px;">De conformidad a la ley 1581 del 2012 y su reglamentación parcial descrita en el 
                        Decreto Nacional 1377 del 2013, el cliente, usuario y/o proveedor autoriza de forma expresa a American travel internacional a la 
                        recolección, almacenamiento, uso, disposición y supresión de los datos adquiridos a través de cualquier tecnología conocida o por 
                        conocer para los usos antes mencionados.
                    </p>
                    <p style="text-align: justify; font-size: 16px;">Además se autoriza a American travel internacional por parte del dueño de la información, 
                        a entregar los datos restirados dentro de sus bases como cooperación a las autoridades competentes autorizadas gubernamentalmente 
                        para garantizar el cumplimiento de las leyes, en materia de protección de la propiedad intelectual, prevención del fraude y otras 
                        materias. El cliente, usuario y/o proveedor autoriza expresamente AMERICAN TRAVEL INTERNACIONAL a suministrar cualquier Información 
                        personal sobre él, con la finalidad de dar cumplimiento a cualquier requerimiento de las autoridades competentes, y con el fin de 
                        cooperar con las ellas en la medida en que discrecionalmente lo entendamos necesario y adecuado en relación con cualquier investigación 
                        de un ilícito o un fraude, infracción de derechos de propiedad intelectual u otra actividad que sea ilegal o que pueda exponer a 
                        AMERICAN TRAVEL INTERNACIONAL a cualquier responsabilidad legal.
                    </p>
                <!-- fin autorizaciones -->

                <!-- cambios -->
                    <h1 style="text-align: left;" id="cambios" class="featurette-heading">Cambios en las políticas o en el aviso de privacidad</h1>
                    <p style="text-align: justify; font-size: 16px;">En cualquier momento y cuando la empresa lo dispongas se podrá realizar cualquier 
                        cambio a esta política y será informada a través de los medios que se consideren a sus clientes, usuarios y proveedores.
                    </p>
                <!-- fin cambios -->
                </div>
            
                <div id="about-side" class="col-md-4">
                    <div id="menu-about">
                        <div class="list-group sticky" data-margin-top="30" data-margin-bottom="30" data-sticky-for="768">
                            <a class="list-group-item" href="#page">Inicio</a>
                            <a class="list-group-item" href="#politicas">Políticas de privacidad</a>
                            <a class="list-group-item" href="#ubicacion">Ubicación</a>
                            <a class="list-group-item" href="#informacion">Finalidad de la información</a>
                            <a class="list-group-item" href="#derechos">Derechos</a>
                            <a class="list-group-item" href="#reclamos">Consultas y/o reclamos</a>
                            <a class="list-group-item" href="#autorizacion">Autorizaciones </a>
                            <a class="list-group-item" href="#cambios">Cambios en las políticas</a>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <br>
    </section>
    <br>
    <br>

@endsection

@section('scripts')
    <script src="{{ asset('js/sticky.js') }}"></script>
    <script>
        $(document).ready(function(){
            var sticky = new Sticky('.sticky');
        });
    </script>
@endsection