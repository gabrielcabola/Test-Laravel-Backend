@extends('base')
@section('metaTitle', '')
@section('metaDescription',  '')
@section('metaKeywords',  '')

@section('contentSection')
    <div class="container mx-auto px-4">
        <div class="shadow-lg rounded-2xl lg:w-6/12 md:w-full p-6 mb-9 mt-9 bg-white relative overflow-hidden">
            <img alt="moto" src="https://thumbs.static-thomann.de/thumb/thumb1000x/pics/prod/210473.jpg"
                 class="absolute -right-20 -bottom-8 h-40 w-40 mb-4"/>
            <div class="w-4/6">
                <p class="text-gray-800 text-lg font-medium mb-2">
                    Articles
                </p>
                <p class="text-gray-400 text-sm pb-4">
                    Manage all Thomann Articles App inventary
                </p>
                <a href="{{ url('articles/') }}"
                   class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">
                    Manage
                </a>

            </div>
        </div>
    </div>
@endsection
