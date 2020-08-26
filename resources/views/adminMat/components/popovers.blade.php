@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Popover </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Popover </h6>
                    <div class="bloco">
                        <button type="button" class="button" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-content="Popover"> Padrão </button>
                        <button type="button" class="button_icon" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-content="Popover"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
