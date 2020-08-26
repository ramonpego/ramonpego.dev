@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Loader </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> #  </h6>
                    <div class="bloco">
                        <div class="loader rotate animate_infinite">
                            <span class="sr-only"> Loading... </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




