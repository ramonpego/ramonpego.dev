<aside class="sidebar sidebar_mobile" id="sidebar">
    <a class="aside_action link_action" id="sidebar_action_mobile_close" href="#">
        <i class="icon ui-1_simple-remove"></i>
    </a>

    <div class="sidebar_content">
        <ul class="nav_collumn nav">
            <li class="nav_collumn_item">
                <a class="nav_collumn_link back_text" href="{{ route('dashboard') }}">
                    <div class="back_icon">
                        <i class="icon ui-2_grid-45"></i>
                    </div>
                    <span class="text_variant"> Dashboard </span>
                </a>
            </li>

            <li class="nav_collumn_item">
                <a class="nav_collumn_link back_text" href="#">
                    <div class="back_icon">
                        <i class="icon arrows-1_triangle-up-19"></i>
                    </div>
                    <span class="text_variant"> Item </span>
                </a>
            </li>

            <li class="nav_collumn_item">
                <a class="nav_collumn_link back_text collapsed" href="#" data-toggle="collapse" data-target="#dropNotifications" aria-expanded="false" aria-controls="info">
                    <div class="back_icon">
                        <i class="icon arrows-1_triangle-up-19"></i>
                    </div>
                    <span class="text_variant"> Item Drop </span>
                </a>

                <div class="collapse" id="dropNotifications">
                    <ul class="list-unstyled" aria-labelledby="dropNotifications">
                        <li class="nav_collumn_item">
                            <a class="nav_collumn_link nav_collumn_link_interno back_text" href="#">
                                <span class="text_variant"> Item </span>
                            </a>
                        </li>

                        <li class="nav_collumn_item">
                            <a class="nav_collumn_link nav_collumn_link_interno back_text" href="#">
                                <span class="text_variant"> Item </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>
