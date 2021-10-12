@extends('base')
@section('metaTitle', sprintf('%s by %s - Article - Thomann Backend', $article->model,  $article->manufacturer))
@section('metaDescription', sprintf('%s by %s - Article - Thomann Backend', $article->model,  $article->manufacturer))
@section('metaKeywords', implode( ", ", [$article->model,  $article->manufacturer,  $article->category]))

@section('contentSection')

    <header class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a class="button mb-2" href="{{ url()->previous() }}">< Back</a>
            <h1 class="text-3xl font-bold text-gray-900">
                {{$article->model}}
            </h1>
            #{{$article->articleNumber}}

        </div>
    </header>

    <section
        class="flex lg:flex-row flex-col-reverse max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @if($article)
            <article class="lg:w-6/12 md:w-full xs:w-full sm:w-full">
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Article Number</label>
                    <h1 class="text-2xl">{{ $article->articleNumber }}</h1>
                </div>
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Manufacturer</label>
                    <h2 class="text-2xl">{{ $article->manufacturer }} </h2>
                </div>
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Model</label>
                    <h3 class="text-2xl">{{ $article->model }}</h3>
                </div>
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Price</label>
                    <p class="text-2xl">
                        Price:
                        <data value="{{ $article->price }}">{{ $article->price }}</data>
                        $
                    </p>
                </div>
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Rank</label>
                    <p class="text-2xl">Rank: {{ $article->rank }}</p>
                </div>
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Category</label>
                    <p class="text-2xl">Category: {{ $article->category }}</p>
                </div>
                <div class="pt-3 pb-1">
                    <label class="font-extralight">Rating</label>
                    <p class="text-2xl">Rating: {{ $article->rating }} ({{ $article->ratingCount }})</p>

                </div>
                </a>
            </article>
            <article class="lg:w-6/12 md:w-full xs:w-full sm:w-full">
                <img src="{{$article->fullImage}}" alt="{{ $article->model }}">
            </article>
        @else
            <article class="empty">
                <h2>Not found 💔 </h2>
            </article>
        @endif
    </section>

@endsection

