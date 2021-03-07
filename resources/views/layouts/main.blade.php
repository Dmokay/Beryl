<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Beryl</title>

    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <link rel="stylesheet" href="{{url('style.css')}}">
</head>
<body>

<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>


@include('layouts.header')

@yield('content')

@include('layouts.footer')


<script src="js/jquery/jquery-2.2.4.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>

<script src="js/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
