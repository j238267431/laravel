<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog on Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">--}}
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
@php $blogName="News Blog"; @endphp
<x-navigation :blogName="$blogName"></x-navigation>


<!-- Categories Widget -->
@yield('content')



<!-- Footer -->
<x-footer></x-footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
