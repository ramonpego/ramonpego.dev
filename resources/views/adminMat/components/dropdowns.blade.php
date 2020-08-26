@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Dropdowns </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Dropdown </h6>
                    <div class="bloco">
                        <div class="dropdown">
                            <button type="button" class="button dropdown-toggle" id="dropExampleRow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>

                            <div class="dropdown-menu" aria-labelledby="dropExampleRow">
                                <a class="dropdown-item" href="#">
                                    <span class="text_variant"> Item 01 </span>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <span class="text_variant"> Item 02 </span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <h6 class="text_variant"> # Dropdown Position </h6>
                    <div class="bloco">
                        
                    </div>

                    <h6 class="text_variant"> # Dropdown User </h6>
                    <div class="bloco">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
