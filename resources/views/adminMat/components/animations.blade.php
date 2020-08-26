@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Animations </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Animation FadeInUp </h6>
                    <div class="bloco">
                        <div class="avatar_back fadeInUp animate_infinite">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Animation FadeInDown </h6>
                    <div class="bloco">
                        <div class="avatar_back fadeInDown animate_infinite">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Animation FadeInLeft </h6>
                    <div class="bloco">
                        <div class="avatar_back fadeInLeft animate_infinite">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Animation FadeInRight </h6>
                    <div class="bloco">
                        <div class="avatar_back fadeInRight animate_infinite">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Animation Pulse </h6>
                    <div class="bloco">
                        <div class="avatar_back pulse animate_infinite">
                            <div class="avatar avatar_small">
                                <img class="avatar_img" src="{{ asset('assets/svgs/avatar.svg') }}" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
