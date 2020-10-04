@extends('site.layout')

@section('content')
    <div class="div__wrapper">
        <div class="container">
            <div class="div__title">
                <span class="sobtitle"> Introdução Blog RP </span>
                <h1 class="title"> Bem vindo! Ao blog sobre programação, de dev para dev<span class="pointer">.</span> </h1>
                <h4 class="subtitle"> Um blog intuitivo, sobre posts relacionados ao meu cotidiado com progrmaação, posts com trechos de código backend, com tecnologias e conhecimento. </h4>
                <a class="button__solid" href="{{ route('posts') }}"> Posts </a>
            </div>
        </div>
    </div>
@endsection
