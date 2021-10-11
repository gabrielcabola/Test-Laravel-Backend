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
                            <data value="{{ $article->price }}">{{ $article->price }}</data>
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

    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>

@endsection
