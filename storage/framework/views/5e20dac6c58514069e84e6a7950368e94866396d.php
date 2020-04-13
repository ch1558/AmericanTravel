<!DOCTYPE html>
<html lang="en">
<head>
	<title>SGI-ATI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/fontawesome.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/template/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/template/hamburgers.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/template/animsition.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/template/select2.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/template/daterangepicker.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="<?php echo e(route('dashboard')); ?>" class="login100-form validate-form">
					<?php echo csrf_field(); ?>
					
					<span class="login100-form-title p-b-25">American Travel Int - SGI</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Escribe tu correo electrónico">
						<input id="first-name" class="input100" type="text" name="email" placeholder="Correo electrónico" value="<?php echo e(old('email')); ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escribe tu documneto">
						<input class="input100" type="password" name="document" placeholder="Documento">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escribe tu contraseña">
						<input class="input100" type="password" name="pass" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button type="submit" class="login100-form-btn">Iniciar Sesión</button>
					</div>
					
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">Olvidaste</span>
						<a href="#" class="txt2">Usuario o contraseña</a>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('../image/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/animsition.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/select2.min.js')); ?>"></script>
	
    <script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
    
    <script src="<?php echo e(asset('js/template/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/template/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/countdowntime.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template/login.js')); ?>"></script>

</body>
</html><?php /**PATH D:\Proyectos\AmericanTravel\resources\views/sgi/login.blade.php ENDPATH**/ ?>