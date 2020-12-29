@extends('site.layout')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <article class="article__">
                <div class="post__">
                    <div class="post__category"> {{ $post->type_description }} </div>

                    <div class="post__info">
                        <span class="text_small"> {{ $post->created_at->diffForHumans() }} </span>
                    </div>

                    <div class="post__header">
                        <h2 class="title"> {{ $post->title }} </h2>
                        {!! $post->description !!}
                    </div>
                    <a class="post__action button__solid" href="{{ route('posts.show', $post) }}"> Ler na íntegra </a>
                </div>
            </article>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection
