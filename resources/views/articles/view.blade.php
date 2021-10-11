@extends('base')
@section('metaTitle', sprintf('%s by %s - Article - Thomann Backend', $article->model,  $article->manufacturer))
@section('metaDescription', sprintf('%s by %s - Article - Thomann Backend', $article->model,  $article->manufacturer))
@section('metaKeywords', implode( ", ", [$article->model,  $article->manufacturer,  $article->category]))

@section('contentSection')
    <div class="container">
        <a class="button" href="{{ url()->previous() }}">Back</a>
        <section class="article__view">
            @if($article)
                <article>
                    <h4 class="item-description">{{ $article->articleNumber }}</h4>
                    <h3 item-description>{{ $article->manufacturer }} </h3>
                    <h2 item-description>{{ $article->model }}</h2>
                    <img src="{{$article->fullImage}}" alt="{{ $article->model }}">
                    <p class="price item-description">
                        Price: <data value="{{ $article->price }}">{{ $article->price }}</data>$
                    </p>
                    <p class="rank item-description">Rank: {{ $article->rank }}</p>
                    <p class="category item-description">Category: {{ $article->category }}</p>
                    <p class="rating item-description">Rating: {{ $article->rating }} ({{ $article->ratingCount }})</p>
                    </a>
                </article>
            @else
                <article class="empty">
                    <h2>Not found 💔 </h2>
                </article>
            @endif
        </section>
    </div>
@endsection
