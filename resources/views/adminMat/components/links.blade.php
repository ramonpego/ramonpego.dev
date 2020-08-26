@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Links </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Link Text </h6>
                    <div class="bloco">
                        <a href="#"> Link 01 </a>
                        <a href="#"> Link 02 </a>
                    </div>

                    <h6 class="text_variant"> # Link Icon </h6>
                    <div class="bloco">
                        <a href="#" class="link_action"> <i class="icon arrows-1_triangle-up-19"></i> </a>
                    </div>

                    <h6 class="text_variant"> # Link Icon Table </h6>
                    <div class="bloco">
                        <a href="#" class="link_action link_table"> <i class="icon arrows-1_triangle-up-19"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
