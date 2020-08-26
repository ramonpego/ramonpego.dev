@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Formulário </h5>
                    <a class="link_action" href="#"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <form method="POST" action="" enctype="multipart/form-data" accept-charset="UTF-8"> @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="text_sm" for="titulo"> Título do documento </label>
                                        <input id="titulo" type="text" class="form-control" name="titulo" value="">
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="text_sm" for="data"> Data </label>
                                        <input id="data" type="date" class="form-control" name="data" value="">
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="text_sm" for="textarea"> Text Área </label>
                                        <textarea id="textarea" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
