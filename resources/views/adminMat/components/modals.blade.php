@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Modals </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Simples </h6>
                    <div class="bloco">
                        <button type="button" class="button" data-toggle="modal" data-target="#modalSimples"> Simples </button>

                        <div class="modal fade modal_simple" id="modalSimples" tabindex="-1" aria-labelledby="modalSimplesLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <a class="close link_action" href="#" data-dismiss="modal" aria-label="Close">
                                            <i class="icon ui-1_simple-remove"></i>
                                        </a>
                                    </div>

                                    <div class="modal-body">
                                        <div class="div_title">
                                            <h4 class="title"> Modal Simples </h4>
                                            <p class="text_sm"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non molestias error dolore, suscipit alias quae soluta eligendi a quaerat maiores magnam sequi iusto eum commodi quo eaque explicabo! Optio!. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="text_variant"> # Padrão </h6>
                    <div class="bloco">
                        <button type="button" class="button" data-toggle="modal" data-target="#modalPadrao"> Padrão </button>

                        <div class="modal fade modal_padrao" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadraoLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="{{ asset('assets/svgs/dev1.svg') }}" alt=".">

                                        <a class="close link_action" href="#" data-dismiss="modal" aria-label="Close">
                                            <i class="icon ui-1_simple-remove"></i>
                                        </a>
                                    </div>

                                    <div class="modal-body">
                                        <div class="div_title">
                                            <h4 class="title"> Modal Padrão </h4>
                                            <p class="text_sm"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non molestias error dolore, suscipit alias quae soluta eligendi a quaerat maiores magnam sequi iusto eum commodi quo eaque explicabo! Optio!. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
