<div class="aside_back none" id="asideUser">
    <aside class="aside fadeInRight">
        <div class="aside_body">
            <a class="aside_action link_action toggle-asideUser" href="#">
                <i class="icon ui-1_simple-remove"></i>
            </a>

            <div class="aside_content">
                <div class="card_infos">
                        <img class="" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                    <span class="badge"> Administrador </span>
                    <p class="text_sm"> ID: 01 </p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="left">
                            <div class="back_icon">
                                <i class="icon business_factory"></i>
                            </div>
                        </div>

                        <div class="right">
                            <p class="text_sm"> Mat Developer </p>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="left">
                            <div class="back_icon">
                                <i class="icon ui-1_calendar-grid-61"></i>
                            </div>
                        </div>

                        <div class="right">
                            <p class="text_sm padrao"> 03091994 </p>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="left">
                            <div class="back_icon">
                                <i class="icon ui-1_email-85"></i>
                            </div>
                        </div>

                        <div class="right">
                            <p class="text_sm"> administrador@gmail.com </p>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="left">
                            <div class="back_icon">
                                <i class="icon ui-2_phone"></i>
                            </div>
                        </div>

                        <div class="right">
                            <p class="text_sm telefone"> 3335113511 </p>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="left">
                            <div class="back_icon">
                                <i class="icon design_phone"></i>
                            </div>
                        </div>

                        <div class="right">
                            <p class="text_sm telefone"> 33991339476 </p>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="left">
                            <div class="back_icon">
                                <i class="icon location_position-pin"></i>
                            </div>
                        </div>

                        <div class="right">
                            <p class="text_sm">
                                Rua Carlos Alberto da Cunha Mello, 170, Apto. 103
                                Marajoara - Teófilo Otoni/MG.
                            </p>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <a class="nav-link button_icon" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon media-1_button-power"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
