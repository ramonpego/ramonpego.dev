@extends('site.layout')

@section('content')
    <div class="container">
        <article class="article__">
            <div class="post__">
                <div class="post__category"> Categoria </div>

                <div class="post__info">
                    <span class="text_small"> {{ $post->created_at->diffForHumans() }} </span>
                </div>

                <div class="post__header">
                    <h2 class="title"> {{ $post->title }} </h2>
                </div>

                <div class="post__content">
                    {!! $post->text!!}
                </div>

                <a class="button__solid" > Author: {{ $post->author->name }} </a>
            </div>
        </article>
    </div>
@endsection
