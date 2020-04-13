<?php $__env->startSection('title'); ?>
    ATI - Contacto
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="page">
        <!-- Barra de navegación -->
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo e(asset('image/img_bg_4.jpg')); ?>);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Contacto</h2>
                                        <h1>¿Requieres información adicional?</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <section class="content-section" id="information">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 col-md-offset-1 animate-box">
                    <h3>información de contacto</h3><br>
                    <div class="row contact-info-wrap">
                        <div class="col-lg-3 col-md-6">
                            <p><span><i class="icon-location"></i></span><a href="<?php echo e($contacto->contact_map_url); ?>"> <?php echo e($contacto->contact_location); ?></a></p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <p>
                                <span><i class="icon-phone3"></i></span>
                                <?php 
                                    $numbers = explode('(+57)',$contacto->contact_phone);
                                ?>
                                <?php for($i=1; $i < sizeof($numbers); $i++): ?>
                                    (057) <?php echo e($numbers[$i]); ?><br>
                                <?php endfor; ?>
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <p><span><i class="icon-paperplane"></i></span><a href="mailto:ventas@americantravelint.com">ventas@americantravelint.com</a></p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <p><span><i class="icon-globe"></i></span> <a href="#">americantravelint.com</a></p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section class="content-section" id="contact">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ingrese aquí sus nombres y apellidos">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ingrese aquí su correo electrónico">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ingrese aquí el asunto de su mensaje">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Escriba aquí el mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6" id="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0697443283234!2d-72.50788798572883!3d7.8877723079892155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e665ab576e9fcc1%3A0xb5311f1fd0868112!2sAtlantis+Centro+Comercial!5e0!3m2!1ses!2sco!4v1558493853530!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/contact.blade.php ENDPATH**/ ?>