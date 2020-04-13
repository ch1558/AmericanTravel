<?php $__env->startSection('title'); ?>
    ATI - Destinos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="page">
        <!-- Barra de navegación -->
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo e(asset('image/desti.jpg')); ?>);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Nuestros destinos</h2>
                                        <h1>¡Difruta de lo mejor en el mundo!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <?php
        $getType = isset($_GET['type']) ? $_GET['type'] : $types[0]->type_code;
        $getContinent = isset($_GET['continent']) ? $_GET['continent'] : $continents[0]->continents_code;
    ?>

    <!-- Tipo destino -->
    <section class="content-section" id="types">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Selecciona el tipo de destino de tu interés</h2>
                    <select class="custom-select" id="type">
                        <?php for($i=0; $i< sizeof($types); $i++): ?>
                            <option value="<?php echo e($types[$i]->type_code); ?>" <?php if($types[$i]->type_code==$getType) echo 'selected';?>>
                                <?php echo e($types[$i]->type_name); ?>

                            </option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

    <!-- Continentes -->
    <section class="content-section" id="continents">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Selecciona el continente de tu interés</h2>
                    <select class="custom-select" id="continent">
                        <?php for($i=0; $i< sizeof($continents); $i++): ?>
                            <option value="<?php echo e($continents[$i]->continents_code); ?>" <?php if($continents[$i]->continents_code==$getContinent) echo 'selected';?>>
                                <?php echo e($continents[$i]->continents_name); ?>

                            </option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function(){
            var codigo;
            let link = window.location.href;

            $("select#type").on('change',function(){
                let url = link.split("?")[0];

                codigo = $("select#type").val(); 
                
                if(link.includes("continent")){
                    url += "?type=" + codigo + "&continent=" + link.split("continent")[1].split("=")[1].split("#")[0];
                }else{
                    url += "?type=" + codigo;
                }

                window.location.href = url + "#types";                                                            
            }); 

            $("select#continent").on('change',function(){
                codigo = $("select#continent").val(); 
                
                if(link.includes("type")){
                    url = link.split("#")[0].split("&")[0] + "&continent=" + codigo;
                }else{
                    url = link.split("?")[0] + "?continent=" + codigo;
                }

                window.location.href = url + "#continents";                                                            
            });     
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/destination.blade.php ENDPATH**/ ?>