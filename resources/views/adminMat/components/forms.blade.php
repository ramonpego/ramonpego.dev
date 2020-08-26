@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Forms </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Algus tipos de campos </h6>
                    <div class="bloco">
                        <form method="" action="" enctype="multipart/form-data" accept-charset="UTF-8">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="text_variant" for="text"> Texto </label>
                                            <input id="text" type="text" class="form-control line" name="text" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="text_variant" for="text"> Texto </label>
                                            <input id="text" type="text" class="form-control" name="text" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="text_variant" for="data"> Data </label>
                                            <input id="data" type="date" class="form-control" name="data" value="">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="text_variant" for="textarea"> Text Área </label>
                                            <textarea id="textarea" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <div class="checkbox_ custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input @error('checkbox') is-invalid @enderror" value="" id="checkbox" name="checkbox">
                                                <label class="custom-control-label text_variant" for="checkbox"> Checkbox </label>
                                                @error('checkbox') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
