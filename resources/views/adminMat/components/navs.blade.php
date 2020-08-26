@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Navs </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Nav Row </h6>
                    <div class="bloco">
                        <ul class="nav_row nav">
                            <li class="nav_row_item">
                                <a class="nav_row_link back_text" href="#">
                                    <span class="text_variant"> Item 01 </span>
                                </a>
                            </li>

                            <li class="nav_row_item">
                                <a class="nav_row_link back_text" href="#">
                                    <span class="text_variant"> Item 02 </span>
                                </a>
                            </li>

                            <li class="nav_row_item">
                                <a class="nav_row_link back_text" href="#">
                                    <span class="text_variant"> Item 03 </span>
                                </a>
                            </li>

                            <li class="nav_row_item dropdown">
                                <a class="nav_row_link back_text dropdown-toggle" href="#" id="dropExampleRow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text_variant"> Item 04 </span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropExampleRow">
                                    <li class="dropdown-item">
                                        <span class="text_variant"> Item 04.1 </span>
                                    </li>

                                    <li class="dropdown-item">
                                        <span class="text_variant"> Item 04.2 </span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <h6 class="text_variant"> # Nav Collumn </h6>
                    <div class="bloco">
                        <ul class="nav_collumn nav">
                            <li class="nav_collumn_item">
                                <a class="nav_collumn_link back_text" href="#">
                                    <div class="back_icon">
                                        <i class="icon arrows-1_triangle-up-19"></i>
                                    </div>
                                    <span class="text_variant"> Item 01 </span>
                                </a>
                            </li>

                            <li class="nav_collumn_item">
                                <a class="nav_collumn_link back_text" href="#">
                                    <div class="back_icon">
                                        <i class="icon arrows-1_triangle-up-19"></i>
                                    </div>
                                    <span class="text_variant"> Item 02 </span>
                                </a>
                            </li>

                            <li class="nav_collumn_item">
                                <a class="nav_collumn_link back_text" href="#">
                                    <div class="back_icon">
                                        <i class="icon arrows-1_triangle-up-19"></i>
                                    </div>
                                    <span class="text_variant"> Item 03 </span>
                                </a>
                            </li>

                            <li class="nav_collumn_item">
                                <a class="nav_collumn_link back_text collapsed" href="#" data-toggle="collapse" data-target="#dropEcempleCollumn" aria-expanded="false" aria-controls="info">
                                    <div class="back_icon">
                                        <i class="icon arrows-1_triangle-up-19"></i>
                                    </div>
                                    <span class="text_variant"> Item 04 </span>
                                </a>

                                <div class="collapse" id="dropEcempleCollumn">
                                    <ul class="list-unstyled" aria-labelledby="dropEcempleCollumn">
                                        <li class="nav_collumn_item">
                                            <a class="nav_collumn_link nav_collumn_link_interno back_text" href="#">
                                                <span class="text_variant"> Item 04.1 </span>
                                            </a>
                                        </li>

                                        <li class="nav_collumn_item">
                                            <a class="nav_collumn_link nav_collumn_link_interno back_text" href="#">
                                                <span class="text_variant"> Item 04.2 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <h6 class="text_variant"> # Nav Rede Social </h6>
                    <div class="bloco">
                        <ul class="nav nav_rede_social">
                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank" rel="noopener" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Site">
                                    <div class="back_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g id="web">
                                                <path d="m437.02 74.98c-48.353-48.352-112.64-74.98-181.02-74.98s-132.667 26.628-181.02 74.98-74.98 112.64-74.98 181.02 26.628 132.667 74.98 181.02 112.64 74.98 181.02 74.98 132.667-26.628 181.02-74.98 74.98-112.64 74.98-181.02-26.628-132.667-74.98-181.02zm-2.132 315.679c-15.31-10.361-31.336-19.314-47.952-26.789 7.339-28.617 11.697-59.688 12.784-91.87h79.702c-3.144 44.336-19.244 85.147-44.534 118.659zm-402.31-118.659h79.702c1.088 32.183 5.446 63.254 12.784 91.87-16.616 7.475-32.642 16.427-47.952 26.789-25.29-33.512-41.39-74.323-44.534-118.659zm44.53-150.654c15.31 10.362 31.336 19.315 47.954 26.79-7.338 28.615-11.695 59.683-12.783 91.864h-79.701c3.144-44.334 19.243-85.142 44.53-118.654zm283.519-42.581c-5.863-10.992-12.198-20.911-18.935-29.713 27.069 11.25 51.473 27.658 71.977 47.997-11.625 7.638-23.702 14.369-36.155 20.185-4.886-13.664-10.528-26.547-16.887-38.469zm-12.965 50.404c-29.211 9.792-60.039 14.831-91.662 14.831s-62.451-5.039-91.662-14.831c20.463-58.253 54.273-97.169 91.662-97.169s71.199 38.916 91.662 97.169zm-203.359 110.831c1.056-28.342 4.885-55.421 10.937-80.116 32.136 10.644 66.018 16.116 100.76 16.116s68.624-5.472 100.76-16.116c6.053 24.695 9.881 51.773 10.937 80.116zm223.394 32c-1.057 28.344-4.885 55.424-10.938 80.12-32.139-10.646-66.02-16.12-100.759-16.12s-68.62 5.474-100.759 16.12c-6.053-24.696-9.882-51.776-10.938-80.12zm-216.324-193.235c-6.358 11.922-12 24.805-16.887 38.468-12.452-5.815-24.53-12.547-36.155-20.185 20.503-20.34 44.907-36.747 71.977-47.997-6.737 8.803-13.073 18.722-18.935 29.714zm-16.886 316.008c4.886 13.661 10.528 26.542 16.885 38.462 5.863 10.992 12.198 20.911 18.935 29.713-27.067-11.25-51.469-27.655-71.971-47.992 11.625-7.637 23.701-14.368 36.151-20.183zm29.853-11.938c29.213-9.794 60.04-14.835 91.66-14.835s62.447 5.041 91.66 14.835c-20.463 58.251-54.272 97.165-91.66 97.165s-71.197-38.914-91.66-97.165zm196.287 50.4c6.357-11.92 11.999-24.801 16.885-38.462 12.451 5.815 24.527 12.547 36.151 20.183-20.502 20.337-44.904 36.743-71.971 47.992 6.737-8.802 13.073-18.721 18.935-29.713zm39.093-193.235c-1.088-32.18-5.445-63.249-12.783-91.864 16.618-7.475 32.645-16.428 47.954-26.79 25.287 33.511 41.386 74.319 44.53 118.654z" fill="#FFF"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank" rel="noopener" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Instagram">
                                    <div class="back_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 35.83 35.83">
                                            <g id="instagram_2">
                                                <g id="instagram">
                                                    <path d="M27.34,6.6a2.11,2.11,0,1,0,2.11,2.1A2.11,2.11,0,0,0,27.34,6.6ZM18,9.3a8.85,8.85,0,1,0,8.85,8.85A8.86,8.86,0,0,0,18,9.3Zm0,14.51a5.67,5.67,0,1,1,5.67-5.66A5.67,5.67,0,0,1,18,23.81Zm17.86-13A10.79,10.79,0,0,0,25,0H10.79A10.79,10.79,0,0,0,0,10.79V25A10.79,10.79,0,0,0,10.79,35.83H25A10.79,10.79,0,0,0,35.83,25ZM32.45,25A7.41,7.41,0,0,1,25,32.45H10.79A7.41,7.41,0,0,1,3.38,25V10.79a7.41,7.41,0,0,1,7.41-7.41H25a7.41,7.41,0,0,1,7.41,7.41Z" fill="#FFF"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <h6 class="text_variant"> # Nav Tabs </h6>
                    <div class="bloco">
                        <ul class="nav nav-tabs" id="tabUser" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text_sm active" id="tab-01-tab" data-toggle="tab" href="#tab-01" role="tab" aria-controls="tab-01" aria-selected="true"> Tab 01 </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link text_sm" id="tab-02-tab" data-toggle="tab" href="#tab-02" role="tab" aria-controls="tab-02" aria-selected="true"> Tab 02 </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link text_sm" id="tab-03-tab" data-toggle="tab" href="#tab-03" role="tab" aria-controls="tab-03" aria-selected="false"> Tab 03 </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="tabUserContent">
                            <div class="tab-pane fade show active" id="tab-01" role="tabpanel" aria-labelledby="tab-01-tab">
                                <p class="text_variant"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores omnis illum modi incidunt beatae eius, nam reprehenderit velit provident error odio quidem iste laboriosam nobis animi dolorum expedita culpa facere? </p>
                            </div>

                            <div class="tab-pane fade show" id="tab-02" role="tabpanel" aria-labelledby="tab-02-tab">
                                <p class="text_variant"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores omnis illum modi incidunt beatae eius, nam reprehenderit velit provident error odio quidem iste laboriosam nobis animi dolorum expedita culpa facere? </p>
                            </div>

                            <div class="tab-pane fade show" id="tab-03" role="tabpanel" aria-labelledby="tab-03-tab">
                                <p class="text_variant"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores omnis illum modi incidunt beatae eius, nam reprehenderit velit provident error odio quidem iste laboriosam nobis animi dolorum expedita culpa facere? </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
