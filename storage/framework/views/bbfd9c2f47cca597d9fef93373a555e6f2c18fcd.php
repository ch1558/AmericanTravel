<?php $__env->startSection('title'); ?>
    ATI - Servicios
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="page">
        <!-- Barra de navegación -->
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo e(asset('image/bg_services.jpg')); ?>);">
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
            <?php for($i=0; $i < sizeof($servicios); $i++): ?>
                <?php 
                    $text = $i%2==0 ? 'order-md-0' : 'order-md-1';
                    $img = $i%2==0 ? 'order-md-1' : 'order-md-0';
                    $title = explode(",",$servicios[$i]->service_name);
                    $image = "image/".$servicios[$i]->service_image;
                ?>
                <div class="row align-items-center featurette"> 
                    <div class="col-md-8 <?php echo e($text); ?>">
                        <h2 class="featurette-heading"><?php echo e($title[0]); ?> <span class="text-muted"> <?php echo e($title[1]); ?></h2>
                        <p><?php echo e($servicios[$i]->service_description); ?></p>
                    </div>
                    <div class="col-md-4 <?php echo e($img); ?>">
                        <img class="featurette-image img-fluid mx-auto" src="<?php echo e(asset($image)); ?>" style="align-content: center;" alt="ati.image" style="width: 250px; height: 250px;" data-holder-rendered="true">
                    </div>
                </div>
                <br>
            <?php endfor; ?>
        </div>
    </section>
    <br>
    <br>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/services.blade.php ENDPATH**/ ?>