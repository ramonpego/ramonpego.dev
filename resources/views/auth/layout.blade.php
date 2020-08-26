<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="aplication-name" content="">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="generator" content="">
        <meta name="copyright" content="© 2020 Digitaliza Tecnologia">
        <meta name="rating" content="general">

        <title> {{ env('APP_NAME') }} </title>

        <!-- | STYLES | -->
        {{-- <link type="image/png" rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}"> --}}
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/icons/nucleo-outline.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/adminMat.css') }}">
    </head>

    <body>
        <div class="auth_page">
            <main class="auth_main">
                {{-- @include('adminMat.partials.loader') --}}

                <section class="auth_section">
                    <div class="auth_card">
                        <p class="text_sm boas mt-4 mb-4"> E ai! </p>

                        <div class="div_title">
                            <img class="logo" src="{{ asset('assets/svgs/logo.png') }}" alt="GED">
                            <p class="text_sm"> Sistema Admin Mat </p>
                            @yield('header')
                        </div>

                        @yield('content')
                    </div>

                    <p class="copy text_sm"> &copy; <a class="text_sm" href="https://www.matheusramalho.dev" target="_blank"> Mat Ramalho </a> </p>
                </section>
            </main>
        </div>
    </body>

    <!-- | SCRIPTS | -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#loader').remove();
        });
    </script>
</html>
