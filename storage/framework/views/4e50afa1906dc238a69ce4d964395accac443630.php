<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-8">
                    <div id="colorlib-logo"><a href="<?php echo e(route('home')); ?>">American Travel Int</a></div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-4 text-right menu-1">
                    <ul>
                        <li><a class="nabbar-links" style="font-size: 16px; color: <?php if(Request::path()=='/'): ?> #ffdd00 <?php endif; ?>"; href="<?php echo e(route('home')); ?>">Inicio</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: <?php if(Request::path()=='Destinos'): ?> #ffdd00 <?php endif; ?>"; href="<?php echo e(route('destination')); ?>">Destinos</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: <?php if(Request::path()=='Paquetes'): ?> #ffdd00 <?php endif; ?>"; href="<?php echo e(route('package')); ?>">Paquetes</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: <?php if(Request::path()=='Servicios'): ?> #ffdd00 <?php endif; ?>"; href="<?php echo e(route('services')); ?>">Servicios</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: <?php if(Request::path()=='Contacto'): ?> #ffdd00 <?php endif; ?>"; href="<?php echo e(route('contact')); ?>">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<?php /**PATH D:\Proyectos\AmericanTravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>