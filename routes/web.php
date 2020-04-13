<?php

    //Sección informativa de la pagina
    Route::get( '/', 'PageController@index' )->name('home');
    Route::get( '/Servicios', 'PageController@services' )->name('services');
    Route::get( '/Contacto', 'PageController@contact' )->name('contact');
    Route::get( '/Privacidad', 'PageController@privacity' )->name('privacity');
    Route::get( '/Nosotros', 'PageController@about' )->name('about');
    Route::get( '/Destinos', 'PageController@destination' )->name('destination');
    Route::get( '/Paquetes', 'PageController@package' )->name('package');

    //Manejo de usuarios 
    Route::get('/SGI/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/SGI/login', 'Auth\LoginController@login')->name('login');
    Route::post('/SGI/logout', 'Auth\LoginController@logout')->name('logout');

    //MANEJO DE RUTAS PARA LA SECCION ADMINISTRATIVA
    Route::get('/SGI', 'DashboardController@redirect');
    Route::get('/SGI/Cuentas', 'DashboardController@account')->name('account');
    Route::get('/SGI/Dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/SGI/Destinos', 'DashboardController@destination')->name('destination');
    Route::get('/SGI/Empleados', 'DashboardController@employeer')->name('employeer');
    Route::get('/SGI/Mailing', 'DashboardController@mailing')->name('mailing');
    Route::get('/SGI/Pagina', 'DashboardController@page')->name('page');
    Route::get('/SGI/Paquetes', 'DashboardController@package')->name('package');

    /*
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
   */ 

