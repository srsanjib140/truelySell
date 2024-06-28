<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <title>User - Dashboard  </title>
        <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/html/src/assets/img/favicon.ico"/>
        <link href="{{ asset('layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layouts/vertical-light-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
      
    
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="{{ asset('src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layouts/vertical-light-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layouts/vertical-light-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
    
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="{{ asset('src/plugins/src/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('src/assets/css/light/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('src/assets/css/dark/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

        <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/elements/alert.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/elements/alert.css')}}">
        
   
    

        <!-- Scripts -->
        <script src="{{ asset('layouts/vertical-light-menu/loader.js')}}"></script>
    </head>
    <body class="layout-boxed">
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->
    
        <!--  BEGIN NAVBAR  -->
       @include('layouts.navigation')
        <!--  END NAVBAR  -->
    
        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">
    
            <div class="overlay"></div>
            <div class="search-overlay"></div>
    
            <!--  BEGIN SIDEBAR  -->
            @include('layouts.sidebar')
            <!--  END SIDEBAR  -->
    
            <!--  BEGIN CONTENT AREA  -->
            @yield('content')
           
            <!--  END CONTENT AREA  -->
    
        </div>
        <!-- END MAIN CONTAINER -->
       
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

          <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('src/plugins/src/global/vendors.min.js')}}"></script>
  
    <script src="{{ asset('src/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
        
        <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
        <script src="{{ asset('src/plugins/src/waves/waves.min.js')}}"></script>
        <script src="{{ asset('layouts/vertical-light-menu/app.js')}}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
    
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="{{ asset('src/plugins/src/apex/apexcharts.min.js')}}"></script>
        <script src="{{ asset('src/assets/js/dashboard/dash_1.js')}}"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        
        <script src="{{ asset('src/plugins/src/table/datatable/datatables.js')}}"></script>
        @yield('js')
    </body>
</html>
