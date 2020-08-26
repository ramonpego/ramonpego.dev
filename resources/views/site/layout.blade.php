<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="aplication-name" content="Ramon Pego">
        <meta name="author" content="Ramon Pego">
        <meta name="description" content="Site do Dev Backend Ramon Pego">
        <meta name="keywords" content="Dev, Frontend">
        <meta name="generator" content="PhpStorm">
        <meta name="copyright" content="© 2020 Ramon Pego">
        <meta name="rating" content="general">

        <title> {{ env('APP_NAME') }} </title>

        <!-- | STYLES | -->
        {{-- <link type="image/png" rel="shortcut icon" href="# "> --}}
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/icons/nucleo-outline.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/site.css') }}">
    </head>

    <body>
        @include('site.partials.loader')

        <div class="content">
            @include('site.aside.aside')

            <main class="main">
                @include('site.navbar.navbar')

                @yield('content')
                <section class="section"> ... </section>
            </main>
        </div>

        @include('site.footer.footer')
        @include('site.partials.back_top')

        <!-- | SCRIPTS | -->
        <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/site.js') }}"></script>
        @stack('script')
    </body>

</html>
