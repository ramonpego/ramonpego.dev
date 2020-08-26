@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Buttons </h5>
                    <a class="link_action" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Botões Padrãos </h6>
                    <div class="bloco">
                        <button type="button" class="button"> Padrão </button>
                        <button type="button" class="button_icon"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                    </div>

                    <h6 class="text_variant"> # Botões com Icone </h6>
                    <div class="bloco">
                        <button type="button" class="button"> Padrão <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button"> <i class="icon arrows-1_triangle-up-19"></i> Padrão </button>
                    </div>

                    <h6 class="text_variant"> # Botões Sólidos </h6>
                    <div class="bloco">
                        <button type="button" class="button button_solid_mat"> Mat </button>
                        <button type="button" class="button button_solid_success"> Success </button>
                        <button type="button" class="button button_solid_primary"> Primary </button>
                        <button type="button" class="button button_solid_warning"> Warning </button>
                        <button type="button" class="button button_solid_danger"> Danger </button>
                        <button type="button" class="button button_solid_clear"> Clear </button>
                    </div>

                    <h6 class="text_variant"> # Botões Outlines </h6>
                    <div class="bloco">
                        <button type="button" class="button button_outline_mat"> Mat </button>
                        <button type="button" class="button button_outline_success"> Success </button>
                        <button type="button" class="button button_outline_primary"> Primary </button>
                        <button type="button" class="button button_outline_warning"> Warning </button>
                        <button type="button" class="button button_outline_danger"> Danger </button>
                        <button type="button" class="button button_outline_clear"> Clear </button>
                    </div>

                    <h6 class="text_variant"> # Botões Icones Sólidos </h6>
                    <div class="bloco">
                        <button type="button" class="button_icon button_icon_solid_mat"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_solid_success"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_solid_primary"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_solid_warning"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_solid_danger"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_solid_clear"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                    </div>

                    <h6 class="text_variant"> # Botões Icones Outlines </h6>
                    <div class="bloco">
                        <button type="button" class="button_icon button_icon_outline_mat"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_outline_success"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_outline_primary"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_outline_warning"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_outline_danger"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                        <button type="button" class="button_icon button_icon_outline_clear"> <i class="icon arrows-1_triangle-up-19"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
