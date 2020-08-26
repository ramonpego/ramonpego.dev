@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Badges </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Badge </h6>
                    <div class="bloco">
                        <span class="badge"> Badge </span>
                        <span class="badge badge_normal"> Badge </span>
                        <span class="badge badge_warning"> Badge </span>
                        <span class="badge badge_danger"> Badge </span>
                    </div>

                    <h6 class="text_variant"> # Badge Notification </h6>
                    <div class="bloco">

                        <div class="back_icon">
                            <span class="badge_notification"></span>
                            <i class="icon ui-1_bell-53"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
