{{--<span class="sr-only">(current)</span>--}}

<nav class="navbar navbar-expand-lg navbar__">
    <span class="navbar-brand"> Ramon Pêgo<span class="pointer">.</span> </span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto navbar__menu">
            <li class="nav-item navbar__item">
                <a class="nav-link navbar__link" href="{{ route('home') }}"> Posts </a>
            </li>

            <li class="nav-item navbar__item">
                <a class="nav-link navbar__link" href="{{ route('contact') }}"> Contato </a>
            </li>

            <li class="nav-item navbar__item">
                <a class="nav-link navbar__link sidebar__action" href="#">
                    <span class="line__icon"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
