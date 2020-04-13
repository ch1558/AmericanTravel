<?php $__env->startSection('title'); ?>
    ATI - Acerca de Nosotros
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="page">
        <!-- Barra de navegación -->
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo e(asset('image/nosotros.jpg')); ?>);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Nosotros</h2>
                                        <h1>¡Conócenos mucho mejor!</h1>
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
            <div class="row" id="american">
                <div class="col-lg-10 mx-auto">
                    <h1>American Travel Internacional</h1>
                    <p class="lead mb-5">Somos una empresa cucuteña con experiencia reconocida el ejercicio de venta y 
                        organización de servicios y actividades turísticas, innovando permanentemente en el servicio y la 
                        manera de reducir costos sin perder la calidad del mismo.</p>
                </div>
            </div>
        <div>
        <br>
        <div class="container">
      <div class="row">
                <div id="about-info" class="col-md-8">      
                    <h1 style="text-align: left;" id="nuestra-empresa" class="featurette-heading">Nuestra empresa</h1>
                    <p style="text-align: justify; font-size: 16px;">Cuenta con el respaldo de las empresas líderes de la industria a nivel nacional e internacional, 
                        que se traduce en un gran poder de negociación y un servicio integral, permitiendo reducir costos 
                        directos e indirectos en gastos de viaje. Seguridad, confianza y cobertura que solo puede garantizar 
                        la experiencia en el mercado.</p>
                    <p style="text-align: justify; font-size: 16px;">En el tiempo de operación de la agencia de viajes y turismo American Travel Internacional se ha caracterizado 
                        por ser una de las primeras organizaciones del mercado local en especializarse en viajes internacionales bajo la 
                        modalidad “todo incluido” con un reconocido prestigio a nivel local, nacional y líderes en servicio.</p>
                    <h1 style="text-align: left;" id="mision" class="featurette-heading">Misión</h1>
                    <p style="text-align: justify; font-size: 16px;">Es ofrecer asesoría profesional y comercial de calidad en el ejercicio de venta, operación, 
                    organización de servicios y actividades turísticas, directamente o como intermediarios entre 
                    las personas interesadas en viajar y los proveedores de servicios, trabajando para satisfacer 
                    sus necesidades, expectativas y motivaciones</p>
                    <h1 style="text-align: left;" id="vision" class="featurette-heading">Visión</h1>
                    <p style="text-align: justify; font-size: 16px;">Ser una organización líder y reconocida en el sector turismo, 
                        por ser promotores del desarrollo sostenible de la región y el servicio ofrecido a los viajeros 
                        mediante la satisfacción de las necesidades de las partes interesadas</p>
                    <h1 style="text-align: left;" id="informacion" class="featurette-heading">Información adicional</h1>
                    <p style="text-align: justify; font-size: 16px;">También ofrecemos soluciones efectivas, innovación tecnológica y amplia experiencia en el manejo de viajes 
                        de negocios y turismo. Conocemos y manejamos las necesidades globales respetando la cultura de servicio y 
                        ofreciéndoles a nuestros clientes soporte, apoyo y valores agregados que exceden sus expectativas. Contamos 
                        con un grupo de aliados estratégicos únicos para que nuestros clientes tengan acceso a los mejores beneficios 
                        en tarifas aéreas y hoteleras, así como un excelente servicio de asesoramiento.</p>
                    <p style="text-align: justify; font-size: 16px;">Contamos con programa de hoteles con tarifas preferenciales y bloqueo de habitaciones. Programa de cruceros y 
                        vacaciones, así como asesoría en el gerenciamiento de viajes corporativos y organización de viajes de incentivos. 
                        De la misma forma, planeamos, organizamos congresos, convenciones y eventos.</p>
                </div>
                <div id="about-side" class="col-md-4">
                    <div id="menu-about">
                        <div class="list-group sticky" data-margin-top="30" data-margin-bottom="30" data-sticky-for="768">
                            <a class="list-group-item" href="#page">Inicio</a>
                            <a class="list-group-item" href="#american">American Travel Internacional</a>
                            <a class="list-group-item" href="#nuestra-empresa">Nuestra Empresa</a>
                            <a class="list-group-item" href="#mision">Misión</a>
                            <a class="list-group-item" href="#vision">Visión</a>
                            <a class="list-group-item" href="#informacion">Información Adicional</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <br>
    <br>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/sticky.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            var sticky = new Sticky('.sticky');
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/about.blade.php ENDPATH**/ ?>