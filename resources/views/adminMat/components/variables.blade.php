@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Variables </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Fonts </h6>
                    <div class="bloco bloco_collumn">
                        <p class="text_variant"> $font_black: JetBrainsMono-ExtraBold; </p>
                        <p class="text_variant"> $font_bold: JetBrainsMono-Bold; </p>
                        <p class="text_variant"> $font_regular: JetBrainsMono-Regular; </p>
                        <p class="text_variant"> $font_light: JetBrainsMono-Light </p>
                    </div>

                    <h6 class="text_variant"> # Colors </h6>
                    <div class="bloco bloco_collumn">
                        <p class="text_variant"> $color_pri: #9FDE89; </p>
                        <p class="text_variant"> $color_sec: #1FBB55; </p>
                        <p class="text_variant"> $white: #FFFFFF; </p>
                        <p class="text_variant"> $snow: #F4F3F8; </p>
                        <p class="text_variant"> $grey: #EFEFEF; </p>
                        <p class="text_variant"> $border: #E7E9EE; </p>
                        <p class="text_variant"> $black: #363636; </p>
                        <p class="text_variant"> $yellow: #FFB657; </p>
                        <p class="text_variant"> $blue: #0086FF; </p>
                        <p class="text_variant"> $red: #FF7070; </p>
                        <p class="text_variant"> $color_rgba: rgba(71, 197, 81, .1); </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
