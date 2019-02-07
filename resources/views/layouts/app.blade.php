<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ url('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ url('public/css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
    <link href="{{ url('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ url('public/js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/js/bootstrap.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $(".mobile-menu").on("click", function(){
                $(".nav-sub-menu").slideToggle();
                $(this).toggleClass("active");
            });
        });
    </script>
</body>
</html>
