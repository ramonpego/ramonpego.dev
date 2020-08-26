@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Avatars </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Avatar com texto </h6>
                    <div class="bloco">
                        <div class="avatar_back">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>

                            <div class="avatar_infos">
                                <span class="text"> Administrador </span>
                                <span class="text"> ID: 1 </span>
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Avatar </h6>
                    <div class="bloco">
                        <div class="avatar_back">
                            <div class="avatar">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Avatar Small </h6>
                    <div class="bloco">
                        <div class="avatar_back">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Avatar Large </h6>
                    <div class="bloco">
                        <div class="avatar_back">
                            <div class="avatar avatar_large">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
