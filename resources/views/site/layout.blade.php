<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="aplication-name" content="Ramon Pêgo">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="copyright" content="© 2020 Ramon Pego">
        <meta name="generator" content="PhpStorm">
        <meta name="author" content="Ramon Pêgo">
        <meta name="robots" content="index, follow">
        <meta name="rating" content="general">

        <title> {{ env('APP_NAME') }} </title>

        <!-- | STYLES | -->
        <link type="image/png" rel="shortcut icon" href="# ">
        {{-- <link rel="apple-touch-icon" sizes="48x48" href="">
        <link rel="apple-touch-icon" sizes="72x72" href="">
        <link rel="apple-touch-icon" sizes="96x96" href="">
        <link rel="apple-touch-icon" sizes="144x144" href="">
        <link rel="apple-touch-icon" sizes="192x192" href="">
        <link rel="apple-touch-icon" sizes="256x256" href="">
        <link rel="apple-touch-icon" sizes="384x384" href="">
        <link rel="apple-touch-icon" sizes="512x512" href=""> --}}

        <link type="text/css" rel="stylesheet" href="{{ asset('css/site.css') }}">
    </head>

    <body class="body__">
        <div class="loader__content">
            <div class="loader__ loader__rounded"></div>
        </div>

        <div class="content__">
            @include('site.sidebar.sidebar')

            <main class="main__">
                @include('site.navbar.navbar')

                <section class="section__">
                    @yield('content')
                </section>
            </main>
        </div>

        @include('site.footer.footer')

        <!-- | SCRIPTS | -->
        <script src="{{ asset('js/site.js') }}"></script>
    </body>

</html>
