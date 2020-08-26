@extends('adminMat.layout')

@section('content')
    <div class="row bloco">
        <div class="card_infos">
            <img class="" src="{{ asset('assets/svgs/dev1.svg') }}" alt=".">
            <span class="badge"> 04 </span>
            <p class="text_sm"> Repositórios </p>
        </div>

        <div class="card_infos">
            <img class="" src="{{ asset('assets/svgs/dev3.svg') }}" alt=".">
            <span class="badge"> 01 </span>
            <p class="text_sm"> Sistemas </p>
        </div>

        <div class="card_infos">
            <img class="" src="{{ asset('assets/svgs/dev2.svg') }}" alt=".">
            <span class="badge"> 01 </span>
            <p class="text_sm"> Sites </p>
        </div>

        <div class="card_infos">
            <img class="" src="{{ asset('assets/svgs/dev5.svg') }}" alt=".">
            <span class="badge"> 01 </span>
            <p class="text_sm"> Clientes </p>
        </div>
    </div>

    {{-- <pre class="chroma">
        <code class="language-text" data-lang="text">
            Ged-cliente/
            |
            |-- resources/
                |
                |-- sass
                |    |-- configuration/
                |    │   |-- _variables.scss
                |    |   |-- _mixins.scss
                |    |   |-- _contents.scss
                |    |   |-- _media_queries.scss
                |    |
                |    |-- utilities/
                |    |   |-- _animations.scss
                |    |   |-- _loader.scss
                |    |   |-- _typography.scss
                |    |   |-- _links.scss
                |    |   |-- _buttons.scss
                |    |   |-- _tables.scss
                |    |   |-- _forms.scss
                |    |   |-- _lists.scss
                |    |   |-- _images.scss
                |    |   |-- _scroll.scss
                |    |   |-- _badge.scss
                |    |   |-- _breadcrumb.scss
                |    |   |-- _utilities.scss
                |    |
                |    |-- components/
                |        |-- _auth.scss
                |        |-- _navbar.scss
                |        |-- _aside.scss
                |        |-- _sidebar.scss
                |        |-- _footer.scss
                |        |-- _cards.scss
                |        |-- _dropdowns.scss
                |        |-- _modals.scss
                |        |-- _fancytree.scss
                |
                |-- style.scss
        </code>
    </pre> --}}
@endsection
