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
                <h2>No Articles found</h2>
            @endforelse
Showing {{ $articles->count() }} of {{ $articles->total() }}
                @if ($articles->hasPages())
                    @if ($articles->onFirstPage())
                        <li class="disabled"><span>← Previous</span></li>
                    @else
                        <li><a href="{{ $articles->previousPageUrl() }}" rel="prev">← Previous</a></li>
                    @endif
                Page {{ $articles->currentpage() }} / {{ $articles->lastPage()   }}

                        @if ($articles->hasMorePages())
                            <li><a href="{{ $articles->nextPageUrl() }}" rel="next">Next →</a></li>
                        @else
                            <li class="disabled"><span>Next →</span></li>
                        @endif
                @endif

        </section>
    </div>

    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>

@endsection
