<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sofa League</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/montserrat.css')}}">
    <!-- CSS -->
    <!-- Bootstrap CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Icon Font CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Plugins CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!-- Style CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Modernizer JS
	============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper fix minheight-100vh">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
        <!-- Bootstrap JS
        ============================================ -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Plugins JS
        ============================================ -->
        <script src="{{asset('js/plugins.js')}}"></script>
        <!-- Main JS
        ============================================ -->
        <script src="{{asset('js/main.js')}}"></script>

        <script>
            function logout() {
                document.getElementById("logoutform").submit();
            }
        </script>

        @yield('scripts')

    </div>

</body>

</html>