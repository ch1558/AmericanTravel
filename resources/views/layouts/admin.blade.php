<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/dashboard/paper-dashboard.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/dashboard/demo.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/dashboard/dash.css') }}" rel="stylesheet">
        <title>@yield('title')</title>
    </head>

    <body class="" id="body">

        <div class="wrapper">

            @include('partials.sidebar')
            
            <div class="main-panel">
                @include('partials.navbarAdmin')
                @yield('content')
            </div>

        </div>

        <!--   Core JS Files   -->
        <script src="{{ asset('js/jquery.min.js') }}"></script> 
        <script src="{{ asset('js/dashboard/functions.js') }}"></script> 
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <script src="{{ asset('js/dashboard/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/chartjs.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/bootstrap-notify.js') }}"></script>
        
        <script src="{{ asset('js/dashboard/paper-dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/dashboard/demo.js') }}"></script>
        <script>
            $(document).ready(function() {
            demo.initChartsPages();
            });
        </script>

        @yield('scripts')

    </body>
</html>
