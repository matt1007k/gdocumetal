<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Sistema de Gestión Documental</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    
    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/theme-indigo.min.css')}}" rel="stylesheet" />
    
    <!-- Style default -->
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body class="theme-indigo">
<div id="id"> 
    @include('components/loading')
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    @include('components/searchnav')
    @include('components/topnav') 
    @include('components/sidebar')     

        <main>
            @yield('content')
        </main>
</div>

@include('components/footer')
</body>
</html>
