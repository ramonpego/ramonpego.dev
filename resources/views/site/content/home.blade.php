@extends('site.layout')

@section('content')
    <article class="article__">
        <div class="post__">
            <div class="post__category"> Categoria </div>

            <div class="post__info">
                <span class="text_small"> Sep 17th 2020 </span>
            </div>

            <div class="post__header">
                <h2 class="title"> Automating the Laravel 8 schema dump using GitHub Actions </h2>
                <p class="text"> Dan Manson explains how you can run that shiny new schema:dump command on GitHub actions. Pretty cool. </p>
                <p class="text"> Rest assured that I will only use your email address to send you the newsletter and will not use it for any other purposes. </p>
                <p class="text"> Rest assured that I will only use your email address to send you the newsletter and will not use it for any other purposes. </p>
            </div>

            {{-- <div class="post__content">
                <h3 class="subtitle"> Stay up to date with all things Laravel, PHP, and JavaScript. </h3>
                <p class="text"> Dan Manson explains how you can run that shiny new schema:dump command on GitHub actions. Pretty cool. </p>
                <p class="text"> Rest assured that I will only use your email address to send you the newsletter and will not use it for any other purposes. </p>
                <p class="text"> Rest assured that I will only use your email address to send you the newsletter and will not use it for any other purposes. </p>
            </div> --}}

            <a class="post__action button__solid" href=""> Ler na íntegra </a>
        </div>
    </article>
@endsection
