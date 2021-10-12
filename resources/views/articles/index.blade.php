@extends('base')
@section('metaTitle', 'Articles - Thomann Backend')
@section('metaDescription',  '')
@section('metaKeywords',  '')

@section('contentSection')
    <header class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Articles
            </h1>
            @if ($articles->hasPages())
                <p>Showing {{ $articles->count() }} of {{ $articles->total() }}</p>
            @endif
        </div>
    </header>
    <div class="container  mx-auto px-4">
        <section class="flex flex-col divide divide-y w-full">
            @forelse($articles as $article)
                <article class="flex flex-row">
                    <div class="select-none  flex flex-1 items-center p-4">

                            <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                                <a href="{{ Route('articles.view', ['id' => $article->articleNumber]) }}" class="block relative">
                                    <img src="{{$article->thumbImage}}" alt="{{ $article->model }}"
                                         class="mx-auto object-cover rounded-full h-10 w-15 "/>
                                </a>
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                                <div class="font-medium">
                                    {{ $article->manufacturer }}
                                </div>
                                <div class="text-gray-600 text-sm">
                                    {{ $article->model }}
                                </div>
                            </div>
                            <div class="text-gray-600 dark:text-gray-200 text-xs">
                                <data value="{{ $article->price }}">{{ $article->price }}</data>
                                $
                            </div>
                            <a  href="{{ Route('articles.view', ['id' => $article->articleNumber]) }}" class="w-24 text-right flex justify-end">
                                <svg width="20" fill="currentColor" height="20"
                                     class="hover:text-gray-800 dark:hover:text-white dark:text-gray-200 text-gray-500"
                                     viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </a>

                    </div>
                </article>
            @empty
                <article class="empty">
                    <h2>No Articles found</h2>
                </article>
            @endforelse

            @include('components.paginator', ['items' => $articles])
        </section>
    </div>
    </div>

@endsection


