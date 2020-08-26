<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="aplication-name" content="Admin Mat">
        <meta name="author" content="Mat Ramalho">
        <meta name="description" content="Frontend de uma sistema administrador web, cheio de componentes uteis para o desenvolvimento do um sistema web para diversos seguimentos.">
        <meta name="keywords" content="Admin Mat, frontend, web, Sistema Admin, template">
        <meta name="generator" content="VS Code">
        <meta name="copyright" content="© 2020 Matheus Ramalho">
        <meta name="rating" content="general">

        <title> {{ env('APP_NAME') }} </title>

        <!-- | STYLES | -->
        {{-- <link type="image/png" rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}"> --}}
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/icons/nucleo-outline.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/adminMat.css') }}">
        @stack('styles')
    </head>

    <body>
        <div class="page_content">
            @include('adminMat.partials.loader')
            @include('adminMat.navbar.navbar')

            <div class="content">
                @include('adminMat.aside.aside')
                @include('adminMat.sidebar.sidebar')

                <main class="main" id="main">
                    <section class="section">
                        <h6 hidden> Conteúdo </h6>

                        <div class="container-fluid">
                            @include('adminMat.partials.errors')
                            @yield('caminho')
                            @yield('content')
                        </div>
                    </section>

                    @include('adminMat.footer.footer')
                </main>
            </div>
        </div>

        <!-- | SCRIPTS | -->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }} "></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/adminMat.js') }}"></script>
        @stack('scripts')
    </body>

</html>
