@extends('base')
@section('metaTitle', 'Articles - Thomann Backend')
@section('metaDescription',  '')
@section('metaKeywords',  '')

@section('contentSection')

    <div class="container">
        <section>
            @forelse($articles as $article)
                <article>
                    <a href="{{ Route('articles.view', ['id' => $article->articleNumber]) }}">
                        <h3>{{ $article->manufacturer }} - {{ $article->model }}</h3>
                        <img src="{{$article->thumbImage}}" alt="{{ $article->model }}">
                        <p>
                            Price: <data value="{{ $article->price }}">{{ $article->price }}</data>
                            $
                        </p>
                    </a>
                </article>
            @empty
                <article class="empty">
                    <h2>No Articles found</h2>
                </article>
            @endforelse

            @include('components.paginator', ['items' => $articles])
        </section>
    </div>

@endsection
