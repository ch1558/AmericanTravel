<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/dashboard/paper-dashboard.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/dashboard/demo.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/dashboard/dash.css')); ?>" rel="stylesheet">
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>

    <body class="" id="body">

        <div class="wrapper">

            <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="main-panel">
                <?php echo $__env->make('partials.navbarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>

        </div>

        <!--   Core JS Files   -->
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script> 
        <script src="<?php echo e(asset('js/dashboard/functions.js')); ?>"></script> 
        <script src="<?php echo e(asset('js/popper.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('js/dashboard/perfect-scrollbar.jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dashboard/chartjs.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dashboard/bootstrap-notify.js')); ?>"></script>
        
        <script src="<?php echo e(asset('js/dashboard/paper-dashboard.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/dashboard/demo.js')); ?>"></script>
        <script>
            $(document).ready(function() {
            demo.initChartsPages();
            });
        </script>

        <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html>
<?php /**PATH D:\Proyectos\AmericanTravel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>