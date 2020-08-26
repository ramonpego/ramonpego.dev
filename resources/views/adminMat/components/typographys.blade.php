@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Typographys </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Title </h6>
                    <div class="bloco">
                        <h1 class="title mr-3"> Título H1, </h1>
                        <h2 class="title mr-3"> Título H2, </h2>
                        <h3 class="title mr-3"> Título H3, </h3>
                        <h4 class="title mr-3"> Título H4, </h4>
                        <h5 class="title mr-3"> Título H5, </h5>
                        <h6 class="title mr-3"> Título H6 </h6>
                    </div>

                    <h6 class="text_variant"> # Subtitle </h6>
                    <div class="bloco">
                        <h1 class="subtitle"> Subtítulo H1, </h1>
                        <h2 class="subtitle"> Subtítulo H2, </h2>
                        <h3 class="subtitle"> Subtítulo H3, </h3>
                        <h4 class="subtitle"> Subtítulo H4, </h4>
                        <h5 class="subtitle"> Subtítulo H5, </h5>
                        <h6 class="subtitle"> Subtítulo H6 </h6>
                    </div>

                    <h6 class="text_variant"> # Text </h6>
                    <div class="bloco">
                        <p class="text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ex totam quo, explicabo nostrum, architecto exercitationem ipsam voluptas nulla rem earum ut atque blanditiis omnis optio sequi aliquam molestias culpa. </p>
                    </div>

                    <h6 class="text_variant"> # Text Small </h6>
                    <div class="bloco">
                        <p class="text_sm"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ex totam quo, explicabo nostrum, architecto exercitationem ipsam voluptas nulla rem earum ut atque blanditiis omnis optio sequi aliquam molestias culpa. </p>
                    </div>

                    <h6 class="text_variant"> # Text Variação </h6>
                    <div class="bloco">
                        <p class="text_variant"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ex totam quo, explicabo nostrum, architecto exercitationem ipsam voluptas nulla rem earum ut atque blanditiis omnis optio sequi aliquam molestias culpa. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
