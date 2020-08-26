<nav class="navbar navbar-expand">
    <div class="navbar-brand">
        <img src="{{ asset('assets/svgs/logo.svg') }}" alt=".">

        <a class="link_action link_fancytree" id="sidebar_action" href="#">
            <i class="icon ui-2_menu-34"></i>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarGed">
        <ul class="navbar-nav mr-auto navbar_menu">
            <li class="nav-item">
                <a class="nav-link back_text" href="{{ route('dashboard') }}">
                    <span class="text_variant"> Dashboard </span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav navbar_user">
            <!-- PESQUISAR -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <form class="search_box">
                        <label for="pesquisar_" hidden> Pesquisar </label>
                        <input id="pesquisar_" class="form-control" type="search" aria-label="Search" placeholder="Pesquisar...">
                    </form>
                </a>
            </li>

            <!-- NOTIFICAÇÕES -->
            <li class="nav-item toggle-aside-notification">
                <a class="nav-link" href="#">
                    <div class="back_icon">
                        <span class="badge_notification"></span>
                        <i class="icon ui-1_bell-53"></i>
                    </div>
                </a>
            </li>

            <!-- SIDEBAR -->
            <li class="nav-item">
                <a class="nav-link" id="sidebar_action_mobile" href="#">
                    <div class="back_icon">
                        <i class="icon ui-2_grid-48"></i>
                    </div>
                </a>
            </li>

            <!-- ASIDE MENU -->
            <li class="nav-item toggle-asideNavbar">
                <a class="nav-link" href="#">
                    <div class="back_icon">
                        <i class="icon ui-2_menu-34"></i>
                    </div>
                </a>
            </li>

            <!-- ASIDE USER -->
            <li class="nav-item toggle-asideUser">
                <a class="nav-link user" href="#">
                    <div class="avatar_back">
                        <div class="avatar avatar_small">
                            <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                        </div>

                        <div class="avatar_infos">
                            <span class="text"> Administrador </span>
                            <span class="text"> ID: 1 </span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
