<?php $__env->startSection('title'); ?>
    American Travel Internacional
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="page">
        <!-- Barra de navegación -->
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo e(asset('image/bg-promo.jpg')); ?>);">
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
                    <li style="background-image: url(<?php echo e(asset('image/desti.jpg')); ?>);">
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
            <?php for($i=0; $i < sizeof($principales); $i++): ?>
                <?php 
                    $text = $i%2==0 ? 'order-md-0' : 'order-md-1';
                    $img = $i%2==0 ? 'order-md-1' : 'order-md-0';
                    $title = explode(",",$principales[$i]->service_name);
                    $image = "image/".$principales[$i]->service_image;
                ?>
                <div class="row align-items-center featurette"> 
                    <div class="col-md-8 <?php echo e($text); ?>">
                        <h2 class="featurette-heading"><?php echo e($title[0]); ?> <span class="text-muted"> <?php echo e($title[1]); ?></h2>
                        <p><?php echo e($principales[$i]->service_description); ?></p>
                    </div>
                    <div class="col-md-4 <?php echo e($img); ?>">
                        <img class="featurette-image img-fluid mx-auto" src="<?php echo e(asset($image)); ?>" style="align-content: center;"
                            alt="ati.image" style="width: 250px; height: 250px;" data-holder-rendered="true">
                    </div>
                </div>
                <br>
            <?php endfor; ?>
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
                        <?php for($i=0; $i < sizeof($comments); $i++): ?>
                            <?php $photo = "image/".$comments[$i]->informative_image; ?>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(<?php echo e(asset($photo)); ?>);"></span>
                                    <span class="user"><?php echo e($comments[$i]->informative_name); ?></span>
                                    <small><?php echo e($comments[$i]->informative_subname); ?></small>
                                    <blockquote>
                                        <p> <?php echo e($comments[$i]->informative_description); ?> </p>
                                    </blockquote>
                                </div>
                            </div>
                        <?php endfor; ?>
					</div>
				</div>	
			</div>
        </div>
    </div>

    <div id="page">

        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    <?php for($i=0; $i < sizeof($segundarios); $i++): ?>
                        <?php $icon = "image/".$segundarios[$i]->service_image; ?>
                        <div class="col-lg-3 col-md-6 animate-box text-center">
                            <div class="services">
                                <span class="icon">
                                    <i id="flaticon_img" style="background-image: url(<?php echo e(asset($icon)); ?>);"></i>
                                </span>
                                <h3><?php echo e($segundarios[$i]->service_name); ?></h3>
                                <p><?php echo e($segundarios[$i]->service_description); ?></p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <br>
        <div id="colorlib-subscribe" style="background-image: url(<?php echo e(asset('image/img_bg_4.jpg')); ?>);" data-stellar-background-ratio="0.5">
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/index.blade.php ENDPATH**/ ?>