@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Cards </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Card Content </h6>
                    <div class="bloco">
                        <div class="card_content">
                            <div class="card_header">
                                <h5 class="title"> Título </h5>
                                <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                            </div>

                            <div class="card_body">
                                <p class="text_sm"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aut ad porro aliquid sunt similique dolore distinctio eaque omnis, repellendus obcaecati, ducimus aperiam vitae aliquam accusantium odit dignissimos eius quibusdam? </p>
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Card Infos </h6>
                    <div class="bloco">
                        <div class="card_infos">
                            <img class="" src="{{ asset('assets/svgs/dev5.svg') }}" alt=".">
                            <span class="badge"> 01 </span>
                            <p class="text_sm"> Clientes </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
