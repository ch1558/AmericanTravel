<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Juan Camilo Hernandez Parra">
    <meta name="keywords" content="">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <link href="<?php echo e(asset('css/template/animate.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/template/icomoon.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/template/magnific-popup.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/template/flexslider.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/template/owl.carousel.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/template/owl.theme.default.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/template/bootstrap-datepicker.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('fonts/flaticon/font/flaticon.css')); ?>"  rel="stylesheet" type="text/css" >
    <link href="<?php echo e(asset('css/template/style.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/american.css')); ?>" rel="stylesheet" type="text/css">

    <script src="<?php echo e(asset('js/template/modernizr-2.6.2.min.js')); ?>"></script>

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>
  
    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>American Tranvel Internacional</h4>
                    <img id="img_logo" src="../image/logo.png" alt="logo ATIO" width="136.1" height="95.75">
                    <br>
                    <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-envelope"></i></a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Nosotros</h4>
                    <p>
                        <ul class="colorlib-footer-links">
                            <li><a style="color: <?php if(Request::path()=='/'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('home')); ?>">Inicio</a></li>
                            <li><a style="color: <?php if(Request::path()=='Destinos'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('destination')); ?>">Destinos</a></li>
                            <li><a style="color: <?php if(Request::path()=='Paquetes'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('package')); ?>">Paquetes</a></li>
                            <li><a style="color: <?php if(Request::path()=='Servicios'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('services')); ?>">Servicios</a></li>
                            <li><a style="color: <?php if(Request::path()=='Contacto'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('contact')); ?>">Contacto</a></li>
                            <li><a style="color: #FFFFFF;" href="<?php echo e(route('login')); ?>">SGI</a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Enlaces de Interés</h4>
                    <p>
                        <ul class="colorlib-footer-links">
                            <li><a style="color: <?php if(Request::path()=='Nosotros'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('about')); ?>">Acerca de nosotros</a></li>
                            <li><a style="color: <?php if(Request::path()=='Privacidad'): ?> #ffdd00 <?php endif; ?>" href="<?php echo e(route('privacity')); ?>">Política de privacidad</a></li>
                            <li><a href="#">Clausula de responsabilidad</a></li>
                            <li><a href="#">Terminos y condiciones</a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Información de contacto</h4>
                    <ul class="colorlib-footer-links">
                        <li><a href="<?php echo e($contacto->contact_map_url); ?>"><?php echo e($contacto->contact_location); ?></a></li>
                        <?php 
                            $numbers = explode('(+57)',$contacto->contact_phone);
                        ?>
                        <?php for($i=1; $i < sizeof($numbers); $i++): ?>
                            <li style="color: rgba(255, 255, 255, 0.6)">(+57) <?php echo e($numbers[$i]); ?></li>
                        <?php endfor; ?>
                        <li><a href="mailto:<?php echo e($contacto->contact_email); ?>"><?php echo e($contacto->contact_email); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- Bootstrap -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/flickity/js/flickity.pkgd.min.js"></script>
    <!-- Template script -->
    <script src="<?php echo e(asset('js/template/jquery.easing.1.3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/jquery.flexslider-min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/magnific-popup-options.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/jquery.stellar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/main.js')); ?>"></script>
    <!-- <script src="<?php echo e(asset('')); ?>assets/js/main.js"></script> -->
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/layouts/base.blade.php ENDPATH**/ ?>